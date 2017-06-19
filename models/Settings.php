<?php

namespace GetRight\Slider\Models;

use Model;

/**
 * Settings Model
 */
class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'getright_slider_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
