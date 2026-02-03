import { glob } from 'glob';
import fs from 'fs/promises';
import path from 'path';
import postcss from 'postcss';
import cssnano from 'cssnano';

// Configuration
const SOURCE_DIR = 'public/css';
const PATTERN = '**/*.css';
const IGNORE_PATTERN = '**/*.min.css';

async function minifyFiles() {
    console.log('🔍 Buscando archivos CSS...');

    try {
        const files = await glob(PATTERN, { 
            cwd: SOURCE_DIR, 
            ignore: IGNORE_PATTERN,
            nodir: true 
        });

        if (files.length === 0) {
            console.log('⚠️  No se encontraron archivos CSS para minificar.');
            return;
        }

        console.log(`✨ Encontrados ${files.length} archivos. Iniciando minificación...\n`);

        let successCount = 0;
        let errorCount = 0;

        for (const file of files) {
            const filePath = path.join(SOURCE_DIR, file);
            const ext = path.extname(file);
            const basePath = file.substring(0, file.length - ext.length);
            const destPath = path.join(SOURCE_DIR, `${basePath}.min.css`);

            try {
                const css = await fs.readFile(filePath, 'utf8');
                
                const result = await postcss([cssnano]).process(css, { 
                    from: filePath, 
                    to: destPath 
                });

                await fs.writeFile(destPath, result.css);
                
                // Calculate savings
                const originalSize = (css.length / 1024).toFixed(2);
                const minifiedSize = (result.css.length / 1024).toFixed(2);
                const savings = (100 - (result.css.length / css.length * 100)).toFixed(1);

                console.log(`✅ Minificado: ${file}`);
                console.log(`   ${originalSize}KB -> ${minifiedSize}KB (${savings}% ahorrado)`);
                successCount++;
            } catch (err) {
                console.error(`❌ Error minificando ${file}:`, err.message);
                errorCount++;
            }
        }

        console.log('\n----------------------------------------');
        console.log(`🎉 Proceso completado.`);
        console.log(`✅ Exitosos: ${successCount}`);
        if (errorCount > 0) console.log(`❌ Errores: ${errorCount}`);
        console.log('----------------------------------------');

    } catch (err) {
        console.error('❌ Error fatal:', err);
    }
}

minifyFiles();
