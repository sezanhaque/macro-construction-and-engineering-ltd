<?php

use App\Models\AuditTrail;
use Illuminate\Support\Facades\Storage;

if (!function_exists('can')) {
    function can(string $action): bool
    {
        return auth()->user()->can($action);
    }
}

if (!function_exists('cannot')) {
    function cannot(string $action): bool
    {
        return auth()->user()->cannot($action);
    }
}

if (!function_exists('hasRole')) {
    function hasRole(string $role): bool
    {
        return auth()->user()->hasRole($role);
    }
}

if (!function_exists('abort_if_cannot')) {
    function abort_if_cannot(string $action, int $code = 403): void
    {
        $message = 'You do not have permissions to ' . strtolower(str_replace('_', ' ', $action));
        abort_unless(auth()->user()->can($action), $code, $message);
    }
}

if (!function_exists('add_user_log')) {
    function add_user_log($data)
    {
        AuditTrail::create([
            'user_id' => auth()->id(),
            'title' => $data['title'] ?? '',
            'link' => $data['link'] ?? '',
            'reference_id' => $data['id'] ?? 0,
            'section' => $data['section'] ?? '',
            'type' => $data['type'] ?? '',
        ]);
    }
}

if (!function_exists('get_initials')) {
    function get_initials(string $name): ?string
    {
        $words = explode(' ', $name);
        $initials = null;
        foreach ($words as $w) {
            $initials .= $w[0] ?? '';
        }

        return $initials;
    }
}

if (!function_exists('create_avatar')) {
    function create_avatar(string $name, string $filename, string $path): string
    {
        $avatar = new LasseRafn\InitialAvatarGenerator\InitialAvatar();
        $source = $avatar->background('#000')->color('#fff')->name($name)->generate()->stream();

        Storage::disk('public')->put($path . $filename, $source);

        return $path . $filename;
    }
}

if (!function_exists('vat')) {
    function vat(float $price, int $vat): string
    {
        $total = $price * ($vat / 100) + $price;

        return number_format($total / 100, 2);
    }
}

if (!function_exists('size_readable')) {
    function size_readable(int $bytes): string
    {
        $i = floor(log($bytes, 1024));

        return round($bytes / (1024 ** $i), [0, 0, 2, 2, 3][$i]) . ['B', 'kB', 'MB', 'GB', 'TB'][$i];
    }
}

if (!function_exists('in_array_r')) {
    function in_array_r($needle, $haystack, $strict = false): bool
    {
        foreach ($haystack as $item) {
            if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
                return true;
            }
        }

        return false;
    }
}

if (!function_exists('storage_exists')) {
    function storage_exists($file, $disk = 'public'): bool
    {
        if ($file == '') {
            return false;
        }

        return Storage::disk($disk)->exists($file);
    }
}

if (!function_exists('storage_url')) {
    function storage_url($file, $disk = 'public'): string
    {
        return Storage::url($file);
    }
}

if (!function_exists('split_capital_letter_word_from_string')) {
    /**
     * If we have a string "VisitorPass"
     * and we need to split it into "Visitor Pass"
     * use this function.
     */
    function split_capital_letter_word_from_string(string $value): string
    {
        $result = preg_split("/(?=[A-Z])/", $value);
        return implode(" ", $result);
    }
}

if (!function_exists('split_number_from_string')) {
    /**
     * Function to split number from a string value.
     * If we have a string "CA000001" then it will
     * return 000001.
     */
    function split_number_from_string(string $value): int
    {
        preg_match_all('/(\d)|(\w)/', $value, $matches);
        return (int) implode("", $matches[1]);
    }
}

if (!function_exists('split_char_from_string')) {
    /**
     * Function to split char from a string value.
     * If we have a string "CA000001" then it will
     * return CA.
     */
    function split_char_from_string(string $value): string
    {
        preg_match_all('/(\d)|(\w)/', $value, $matches);
        return (string) implode("", $matches[2]);
    }
}