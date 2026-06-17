<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\File;

class Vitrine extends Model implements HasMedia
{
    use InteractsWithMedia;
    
    protected $guarded = [];

    protected $casts = [
        'links' => 'array',
        'settings' => 'array',
        'services' => 'array',
    ];

    public const LANG_OPTIONS = [
        'generic3' => 'Default',
        'generic3_fr' => 'French',
        'generic3_ar' => 'Arabic',
    ];

    public const THEME_OPTIONS = [
        'default' => 'Default',
        'midnight' => 'Midnight',
        'sunset' => 'Sunset',
        'mint' => 'Mint',
        'ocean' => 'Ocean',
        'coral' => 'Coral',
        'forest' => 'Forest',
        'lavender' => 'Lavender',
        'graphite' => 'Graphite',
        'blush' => 'Blush',
        'ember' => 'Ember',
        'dune' => 'Dune',
        'aurora' => 'Aurora',
        'slate' => 'Slate',
        'rose' => 'Rose',
        'peony' => 'Peony',
        'lilac' => 'Lilac',
        'carnation' => 'Carnation',
        'iris' => 'Iris',
        'daisy' => 'Daisy',
        'honeysuckle' => 'Honeysuckle',
        'magnolia' => 'Magnolia',
        'orchid' => 'Orchid',
        'peach' => 'Peach',
        'cherry' => 'Cherry Blossom',
        'marigold' => 'Marigold',
        'tulip' => 'Tulip',
        'sunflower' => 'Sunflower',
        'jasmine' => 'Jasmine',
        'camellia' => 'Camellia',
        'hydrangea' => 'Hydrangea',
        'zinnia' => 'Zinnia',
        'fuchsia' => 'Fuchsia',
        'primrose' => 'Primrose',
        'mist' => 'Mist',
        'ash' => 'Ash',
        'dove' => 'Dove',
        'pebble' => 'Pebble',
        'silver' => 'Silver',
        'pearl' => 'Pearl',
        'smoke' => 'Smoke',
        'cloud' => 'Cloud',
        'stone' => 'Stone',
        'frost' => 'Frost',
        'ecru' => 'Ecru',
        'latte' => 'Latte',
        'biscuit' => 'Biscuit',
        'cream' => 'Cream',
        'alabaster' => 'Alabaster',
        'shell' => 'Shell',
        'chalk' => 'Chalk',
        'linen' => 'Linen',
        'porcelain' => 'Porcelain',
        'flannel' => 'Flannel',
    ];

    public static function themeOptions(): array
    {
        return self::THEME_OPTIONS;
    }

    public static function langOptions(): array
    {
        return self::LANG_OPTIONS;
    }

    public static function themeViewMap(): array
    {
        return [
            'generic3' => 'vitrines.generic3',
            'generic3_fr' => 'vitrines.generic3_fr',
            'generic3_ar' => 'vitrines.generic3_ar',
        ];
    }

    public function getThemeView(): string
    {
        return self::themeViewMap()[$this->theme ?? 'generic3'] ?? 'vitrines.generic3';
    }

    public function getStyleClass(): string
    {
        return 'theme-' . ($this->style ?? 'default');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logo')->singleFile(); 
        $this->addMediaCollection('carousel'); 

    }


}
