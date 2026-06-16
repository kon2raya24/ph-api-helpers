<?php

namespace Kon2raya\PhApiHelpers;

class PhilippineHelper
{
    /**
     * Format Philippine Peso
     */
    public static function formatPeso(float $amount): string
    {
        return '₱' . number_format($amount, 2);
    }

    /**
     * Validate Philippine phone number
     */
    public static function validatePhone(string $phone): bool
    {
        $cleaned = preg_replace('/[^0-9+]/', '', $phone);
        return preg_match('/^(\+63|63|0)9[0-9]{9}$/', $cleaned);
    }

    /**
     * Get Philippine regions
     */
    public static function getRegions(): array
    {
        return [
            'NCR' => 'National Capital Region',
            'CAR' => 'Cordillera Administrative Region',
            'I' => 'Region I (Ilocos Region)',
            'II' => 'Region II (Cagayan Valley)',
            'III' => 'Region III (Central Luzon)',
            'IV-A' => 'Region IV-A (CALABARZON)',
            'IV-B' => 'Region IV-B (MIMAROPA)',
            'V' => 'Region V (Bicol Region)',
            'VI' => 'Region VI (Western Visayas)',
            'VII' => 'Region VII (Central Visayas)',
            'VIII' => 'Region VIII (Eastern Visayas)',
            'IX' => 'Region IX (Zamboanga Peninsula)',
            'X' => 'Region X (Northern Mindanao)',
            'XI' => 'Region XI (Davao Region)',
            'XII' => 'Region XII (SOCCSKSARGEN)',
            'XIII' => 'Region XIII (Caraga)',
            'BARMM' => 'Bangsamoro Autonomous Region in Muslim Mindanao',
        ];
    }
}
