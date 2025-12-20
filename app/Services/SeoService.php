<?php

namespace App\Services;

class SeoService
{
    protected $title;
    protected $description;
    protected $keywords;
    protected $canonical;
    protected $ogImage;
    protected $noindex = false;
    protected $schemas = [];
    protected $customMetas = [];
    protected $author;

    /**
     * Set the page title
     */
    public function title(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Set the meta description
     */
    public function description(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Set keywords (array or comma-separated string)
     */
    public function keywords(string|array $keywords): self
    {
        $this->keywords = is_array($keywords) 
            ? implode(', ', $keywords) 
            : $keywords;
        return $this;
    }

    /**
     * Set Open Graph / Twitter image
     */
    public function image(string $image): self
    {
        $this->ogImage = $image;
        return $this;
    }

    /**
     * Set canonical URL
     */
    public function canonical(string $url): self
    {
        $this->canonical = $url;
        return $this;
    }

    /**
     * Set author meta tag
     */
    public function author(string $author): self
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Block search engine indexing
     */
    public function noindex(): self
    {
        $this->noindex = true;
        return $this;
    }

    /**
     * Add Schema.org structured data
     */
    public function addSchema(array $schema): self
    {
        $this->schemas[] = $schema;
        return $this;
    }

    /**
     * Add custom meta tag
     */
    public function addMeta(string $name, string $content): self
    {
        $this->customMetas[$name] = $content;
        return $this;
    }

    /**
     * Render all SEO tags as HTML
     */
    public function render(): string
    {
        $html = '';
        
        // Title
        if ($this->title) {
            $html .= '<title>' . e($this->title) . '</title>' . "\n    ";
        }
        
        // Description
        if ($this->description) {
            $html .= '<meta name="description" content="' . e($this->description) . '">' . "\n    ";
        }
        
        // Keywords
        if ($this->keywords) {
            $html .= '<meta name="keywords" content="' . e($this->keywords) . '">' . "\n    ";
        }
        
        // Author
        if ($this->author) {
            $html .= '<meta name="author" content="' . e($this->author) . '">' . "\n    ";
        }
        
        // Canonical
        $canonical = $this->canonical ?? url()->current();
        $html .= '<link rel="canonical" href="' . e($canonical) . '">' . "\n    ";
        
        // Robots
        if ($this->noindex) {
            $html .= '<meta name="robots" content="noindex, nofollow">' . "\n    ";
        }
        
        // Open Graph
        if ($this->title) {
            $html .= '<meta property="og:title" content="' . e($this->title) . '">' . "\n    ";
        }
        if ($this->description) {
            $html .= '<meta property="og:description" content="' . e($this->description) . '">' . "\n    ";
        }
        $html .= '<meta property="og:url" content="' . e($canonical) . '">' . "\n    ";
        $html .= '<meta property="og:type" content="website">' . "\n    ";
        
        if ($this->ogImage) {
            $html .= '<meta property="og:image" content="' . e($this->ogImage) . '">' . "\n    ";
        }
        
        // Twitter Card
        $html .= '<meta name="twitter:card" content="summary_large_image">' . "\n    ";
        if ($this->title) {
            $html .= '<meta name="twitter:title" content="' . e($this->title) . '">' . "\n    ";
        }
        if ($this->description) {
            $html .= '<meta name="twitter:description" content="' . e($this->description) . '">' . "\n    ";
        }
        if ($this->ogImage) {
            $html .= '<meta name="twitter:image" content="' . e($this->ogImage) . '">' . "\n    ";
        }
        
        // Custom metas
        foreach ($this->customMetas as $name => $content) {
            $html .= '<meta name="' . e($name) . '" content="' . e($content) . '">' . "\n    ";
        }
        
        // Schemas
        foreach ($this->schemas as $schema) {
            $html .= '<script type="application/ld+json">' . "\n";
            $html .= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            $html .= "\n    " . '</script>' . "\n    ";
        }
        
        return rtrim($html);
    }

    /**
     * Allow using the service as a string
     */
    public function __toString(): string
    {
        return $this->render();
    }
}
