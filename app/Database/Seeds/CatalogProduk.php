<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CatalogProduk extends Seeder
{
    public function run()
    {
        $brands = [
            'Apple',
            'Samsung',
            'Sony',
            'LG',
            'Xiaomi',
            'Huawei',
            'Oppo',
            'Vivo',
            'OnePlus',
            'Google',
            'Microsoft',
            'Dell',
            'HP',
            'Lenovo',
            'Asus',
            'Acer',
            'MSI',
            'Razer',
            'Alienware',
            'MacBook',
            'ThinkPad',
            'Surface',
            'Nintendo',
            'PlayStation',
            'Xbox',
            'Canon',
            'Nikon',
            'Fujifilm',
            'Bose',
            'JBL',
            'Sennheiser',
            'Audio-Technica',
            'Beats',
            'AirPods',
            'Logitech',
            'Corsair',
            'SteelSeries',
            'HyperX',
            'Cooler Master',
            'Intel',
            'AMD',
            'NVIDIA',
            'Western Digital',
            'Seagate',
            'Kingston',
            'Sandisk',
            'Crucial',
            'G.Skill',
            'Corsair Memory'
        ];

        $categories = [
            'Smartphone',
            'Laptop',
            'Desktop',
            'Tablet',
            'Smartwatch',
            'Headphone',
            'Speaker',
            'Camera',
            'Gaming Console',
            'Monitor',
            'Keyboard',
            'Mouse',
            'Processor',
            'Memory',
            'Storage',
            'Graphics Card',
            'Motherboard',
            'Power Supply',
            'Case',
            'Cooling Fan',
            'Webcam',
            'Microphone',
            'Router',
            'Modem',
            'Switch',
            'Cable',
            'Adapter',
            'Charger',
            'Battery',
            'Screen Protector',
            'Phone Case',
            'Stand'
        ];

        $adjectives = [
            'Pro',
            'Max',
            'Ultra',
            'Plus',
            'Mini',
            'Air',
            'Lite',
            'Prime',
            'Elite',
            'Premium',
            'Standard',
            'Basic',
            'Advanced',
            'Gaming',
            'Professional',
            'Wireless',
            'Portable',
            'Compact',
            'Slim',
            'Heavy Duty',
            'High Performance',
            'Budget',
            'Economic',
            'Luxury'
        ];

        $models = [
            'X1',
            'S1',
            'Pro 15',
            'Max 256',
            'Ultra 4K',
            'GT 500',
            'RTX 3080',
            'i7-12700K',
            'Ryzen 7',
            'M1 Chip',
            'Galaxy Tab',
            'iPad Pro',
            'MacBook Air',
            'ThinkPad X1',
            'Surface Pro',
            'Predator Helios',
            'ROG Strix',
            'Legion 5',
            'Pavilion',
            'Inspiron',
            'XPS 13',
            'ZenBook',
            'VivoBook',
            'TUF Gaming',
            'Nitro 5',
            'Aspire'
        ];

        $data = [];

        for ($i = 1; $i <= 1000; $i++) {
            $brand = $brands[array_rand($brands)];
            $category = $categories[array_rand($categories)];
            $adjective = $adjectives[array_rand($adjectives)];
            $model = $models[array_rand($models)];

            // Generate random product name combinations
            $nameFormats = [
                $brand . ' ' . $category . ' ' . $adjective,
                $brand . ' ' . $model . ' ' . $category,
                $category . ' ' . $brand . ' ' . $adjective,
                $brand . ' ' . $adjective . ' ' . $model,
                $model . ' ' . $category . ' by ' . $brand
            ];

            $nama = $nameFormats[array_rand($nameFormats)];

            // Random timestamps within last 2 years
            $createdAt = date('Y-m-d H:i:s', rand(strtotime('-2 years'), time()));
            $updatedAt = date('Y-m-d H:i:s', rand(strtotime($createdAt), time()));

            $data[] = [
                'nama' => $nama,
                'brand' => $brand,
                'created_at' => $createdAt,
                'updated_at' => $updatedAt
            ];

            // Insert in batches of 100 to avoid memory issues
            if ($i % 100 == 0) {
                $this->db->table('catalog_produk')->insertBatch($data);
                $data = []; // Reset array
                echo "Inserted " . $i . " records...\n";
            }
        }

        // Insert remaining data if any
        if (!empty($data)) {
            $this->db->table('catalog_produk')->insertBatch($data);
        }

        echo "Successfully inserted 1000 catalog products!\n";
    }
}
