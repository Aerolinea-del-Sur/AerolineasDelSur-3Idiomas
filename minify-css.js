import { glob } from 'glob';
import fs from 'fs/promises';
import path from 'path';
import postcss from 'postcss';
import cssnano from 'cssnano';

async function minifyCSS() {
    try {
        // Encontrar todos los archivos CSS que NO sean .min.css
        const cssFiles = await glob('public/css/**/*.css', {
            ignore: ['**/*.min.css', '**/node_modules/**']
        });

        console.log(`\n🎨 Encontrados ${cssFiles.length} archivos CSS para minificar...\n`);

        const processor = postcss([
            cssnano({
                preset: ['default', {
                    discardComments: {
                        removeAll: true,
                    },
                }],
            }),
        ]);

        let successCount = 0;
        let errorCount = 0;

        for (const file of cssFiles) {
            try {
                const css = await fs.readFile(file, 'utf8');

                // Calcular tamaño original
                const originalSize = Buffer.byteLength(css, 'utf8');

                const result = await processor.process(css, { from: file });

                // Generar nombre del archivo minificado
                const parsed = path.parse(file);
                const minifiedPath = path.join(parsed.dir, `${parsed.name}.min${parsed.ext}`);

                await fs.writeFile(minifiedPath, result.css);

                // Calcular tamaño minificado
                const minifiedSize = Buffer.byteLength(result.css, 'utf8');
                const savings = ((originalSize - minifiedSize) / originalSize * 100).toFixed(2);

                console.log(`✅ ${path.basename(file)} → ${path.basename(minifiedPath)}`);
                console.log(`   📊 ${(originalSize / 1024).toFixed(2)} KB → ${(minifiedSize / 1024).toFixed(2)} KB (${savings}% reducción)\n`);

                successCount++;
            } catch (err) {
                console.error(`❌ Error procesando ${file}:`, err.message);
                errorCount++;
            }
        }

        console.log(`\n🎉 Minificación completada!`);
        console.log(`   ✅ ${successCount} archivos minificados correctamente`);
        if (errorCount > 0) {
            console.log(`   ❌ ${errorCount} errores encontrados`);
        }

    } catch (error) {
        console.error('❌ Error durante la minificación:', error);
        process.exit(1);
    }
}

minifyCSS();
