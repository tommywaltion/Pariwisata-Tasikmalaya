<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Main extends Controller
{
    public function Homepage(){
        $allMap = [
                [
                    'latitude' => -7.747730793936072,
                    'longtitude'=> 108.01046689999998,
                    'nama'=> 'Pantai Cipatujah',
                    'image' => "pantai-cipatujah-1248x703 1.png",
                    "deskripsi"=> "Terletak di selatan Tasikmalaya, Pantai Cipatujah terkenal dengan pantai berpasir putih yang luas dan ombak yang cocok untuk berselancar. Pantai ini sering dikunjungi untuk rekreasi keluarga dan aktivitas memancing."
                ],
                [
                    'latitude' => -7.764294801470705, 
                    'longtitude'=> 108.05997416931922,
                    'nama'=> 'Pantai Sindangkerta',
                    'image' => "111601686206253 1.png",
                    "deskripsi"=> "Pantai ini menawarkan keindahan terumbu karang dan kolam-kolam alami yang terbentuk saat air laut surut. Pengunjung dapat menikmati pemandangan bawah laut yang menakjubkan dan keindahan alam sekitar."
                ],
                [
                    'latitude' => -7.7715607182505915, 
                    'longtitude'=> 108.0863278,
                    'nama'=> 'Pantai Pamayangsari',
                    'image' => "Batuan-pemecah-ombak-dan-menara-kembar-di-Pantai-Pamayangsari 1.png",
                    "deskripsi"=> "Pantai yang masih asri dan belum banyak terjamah ini memberikan suasana yang tenang dan nyaman bagi pengunjung yang ingin menikmati keindahan alam tanpa banyak keramaian."
                ],
                [
                    'latitude' => -7.813173932260589, 
                    'longtitude'=> 108.29975275355454,
                    'nama'=> 'Pantai Karang Tawulan',
                    'image' => "zog60d2entsu0xy 1.png",
                    "deskripsi"=> "Dikenal dengan formasi batu karangnya yang unik, Pantai Karang Tawulan menawarkan pemandangan yang dramatis dan spot-spot foto yang menarik."
                ],
                [
                    'latitude' => -7.266070081079858,
                    'longtitude'=> 108.07149460202706,
                    'nama'=> 'Gunung Galunggung',
                    'image' => "kawah-Gunung-Galunggung 1.png",
                    "deskripsi"=> "Gunung berapi yang aktif ini menawarkan pemandangan yang indah dari puncaknya. Selain mendaki, pengunjung juga bisa menikmati pemandian air panas yang ada di sekitar kaki gunung."
                ],
                [
                    'latitude' => -7.265709146317561, 
                    'longtitude'=> 108.09448841812403,
                    'nama'=> 'Cipanas Gunung Galunggung',
                    'image' => "IMG-20230603-WA0009 1.png",
                    "deskripsi"=> "Merupakan pemandian air panas alami yang terletak di lereng Gunung Galunggung. Air panas di sini dipercaya memiliki khasiat untuk kesehatan kulit dan relaksasi."
                ],
                [
                    'latitude' => -7.272541480956916,
                    'longtitude'=>  108.09220976577905,
                    'nama'=> 'Citiis Galunggung',
                    'image' => "maxresdefault 1.png",
                    "deskripsi"=> "Objek wisata ini terkenal dengan air terjunnya yang indah serta suasana alam yang sejuk dan asri, cocok untuk trekking dan menikmati keindahan alam."
                ],
                [
                    'latitude' => -7.303812395545981, 
                    'longtitude'=> 108.06539401074126,
                    'nama'=> 'Batu Mahpar Galunggung',
                    'image' => "IMG-20210516-WA0099 1.png",
                    "deskripsi"=> "Batu Mahpar adalah salah satu spot favorit para pendaki di Gunung Galunggung. Tempat ini menawarkan pemandangan batu besar yang megah dan panorama alam yang menakjubkan."
                ],
                [
                    'latitude' => -7.143423049427282, 
                    'longtitude'=> 108.16990042172397,
                    'nama'=> 'Monumen Lam Alif',
                    'image' => "image 4.png",
                    "deskripsi"=> "Monumen Lam Alif di Tasikmalaya adalah landmark penting yang melambangkan nilai-nilai keislaman dan kebanggaan budaya masyarakat setempat. Terletak di pusat kota, monumen ini terdiri dari dua huruf Arab, \"Lam\" dan \"Alif,\" yang berdiri tegak, merepresentasikan keteguhan iman dan kesatuan umat Muslim."
                ],
                [
                    'latitude' => -7.401410711189457, 
                    'longtitude'=> 108.15057537134628,
                    'nama'=> 'Situ Sanghiyang',
                    'image' => "landmark-situ-sanghyang 1.png",
                    "deskripsi"=> "Danau yang terletak di daerah pegunungan ini menawarkan pemandangan yang indah dengan air yang jernih dan suasana yang tenang, ideal untuk bersantai dan menikmati alam."
                ],
                [
                    'latitude' => -7.36095214207572, 
                    'longtitude'=> 107.99235720532943,
                    'nama'=> 'Kampung Naga',
                    'image' => "20160714kampung_naga.jpg 1.png",
                    "deskripsi"=> "Sebuah desa adat yang masih mempertahankan tradisi dan budaya Sunda yang kental. Pengunjung bisa belajar tentang kehidupan masyarakat adat dan melihat rumah-rumah tradisional."
                ],
                [
                    'latitude' => -7.466750175720626, 
                    'longtitude'=> 107.9477703,
                    'nama'=> 'Kebun Teh Taraju',
                    'image' => "5f17eb8baf20c 1.png",
                    "deskripsi"=> "Nikmati keindahan alam yang asri di Kebun Teh Taraju, destinasi wisata yang terletak di Tasikmalaya, Jawa Barat. Dikelilingi oleh hamparan hijau perkebunan teh yang menenangkan, Kebun Teh Taraju menawarkan pemandangan spektakuler dan udara sejuk pegunungan yang menyegarkan."
                ],
                [
                    'latitude' => -7.311574679201504, 
                    'longtitude'=> 108.23942157116488,
                    'nama'=> 'Taman Karang Resik',
                    'image' => "IMG_20231124_224335_700_x_465_piksel-3544003407 1.png",
                    "deskripsi"=> "Tempat rekreasi keluarga yang lengkap dengan berbagai wahana permainan, taman bunga, dan area piknik. Tempat ini cocok untuk menghabiskan waktu bersama keluarga dan anak-anak."
                ],
                [
                    'latitude' => -7.5711745881966035, 
                    'longtitude'=> 108.074214,
                    'nama'=> 'Goa Safarwadi Pamijahan',
                    'image' => "3650664734 1.png",
                    "deskripsi"=> "Goa ini merupakan salah satu tempat ziarah yang dikenal di Tasikmalaya. Selain nilai religius, goa ini juga menawarkan keindahan formasi stalaktit dan stalagmit."
                ],
                [
                    'latitude' => -7.349906401965165, 
                    'longtitude'=> 108.11059378256738,
                    'nama'=> 'Alun-alun Singaparna',
                    'image' => "Alun-alun-Singaparna-di-Kabupaten-Tasikmalaya-kini-memiliki-wajah-baru-setelah-Pemdaprov-Jabar-setelah-dilakukan-revitalisasi 1.png",
                    "deskripsi"=> "Alun-alun ini merupakan pusat aktivitas masyarakat Tasikmalaya dengan taman yang asri dan fasilitas olahraga. Tempat ini menjadi titik berkumpulnya warga untuk berbagai kegiatan sosial dan rekreasi."
                ]
            ];
        return view("homepage",['mapData' => $allMap]);
    }

    public function Detail(int $pos){
        $allMap = [
            [
                'latitude' => -7.747730793936072,
                'longtitude'=> 108.01046689999998,
                'nama'=> 'Pantai Cipatujah',
                'image' => "pantai-cipatujah-1248x703 1.png",
                'background' => 'Pantai-Cipatujah-Tasikmalaya 1.png',
                "deskripsi"=> "Terletak di selatan Tasikmalaya, Pantai Cipatujah terkenal dengan pantai berpasir putih yang luas dan ombak yang cocok untuk berselancar. Pantai ini sering dikunjungi untuk rekreasi keluarga dan aktivitas memancing."
            ],
            [
                'latitude' => -7.764294801470705, 
                'longtitude'=> 108.05997416931922,
                'nama'=> 'Pantai Sindangkerta',
                'image' => "111601686206253 1.png",
                'background' => 'shutterstock_2388139167 1.png',
                "deskripsi"=> "Pantai ini menawarkan keindahan terumbu karang dan kolam-kolam alami yang terbentuk saat air laut surut. Pengunjung dapat menikmati pemandangan bawah laut yang menakjubkan dan keindahan alam sekitar."
            ],
            [
                'latitude' => -7.7715607182505915, 
                'longtitude'=> 108.0863278,
                'nama'=> 'Pantai Pamayangsari',
                'image' => "Batuan-pemecah-ombak-dan-menara-kembar-di-Pantai-Pamayangsari 1.png",
                'background' => '620d9_pantai 1.png',
                "deskripsi"=> "Pantai yang masih asri dan belum banyak terjamah ini memberikan suasana yang tenang dan nyaman bagi pengunjung yang ingin menikmati keindahan alam tanpa banyak keramaian."
            ],
            [
                'latitude' => -7.813173932260589, 
                'longtitude'=> 108.29975275355454,
                'nama'=> 'Pantai Karang Tawulan',
                'image' => "zog60d2entsu0xy 1.png",
                'background' => 'pantai-karang-tawulan-tasikmalaya_169 1.png',
                "deskripsi"=> "Dikenal dengan formasi batu karangnya yang unik, Pantai Karang Tawulan menawarkan pemandangan yang dramatis dan spot-spot foto yang menarik."
            ],
            [
                'latitude' => -7.266070081079858,
                'longtitude'=> 108.07149460202706,
                'nama'=> 'Gunung Galunggung',
                'image' => "kawah-Gunung-Galunggung 1.png",
                'background' => 'gunung-galunggung_20170914_214023 1.png',
                "deskripsi"=> "Gunung berapi yang aktif ini menawarkan pemandangan yang indah dari puncaknya. Selain mendaki, pengunjung juga bisa menikmati pemandian air panas yang ada di sekitar kaki gunung."
            ],
            [
                'latitude' => -7.265709146317561, 
                'longtitude'=> 108.09448841812403,
                'nama'=> 'Cipanas Gunung Galunggung',
                'image' => "IMG-20230603-WA0009 1.png",
                'background' => '1667838787-20221004_153932_copy_816x459 1.png',
                "deskripsi"=> "Merupakan pemandian air panas alami yang terletak di lereng Gunung Galunggung. Air panas di sini dipercaya memiliki khasiat untuk kesehatan kulit dan relaksasi."
            ],
            [
                'latitude' => -7.272541480956916,
                'longtitude'=>  108.09220976577905,
                'nama'=> 'Citiis Galunggung',
                'image' => "maxresdefault 1.png",
                'background' => '6434203e3b20c 1 (1).png',
                "deskripsi"=> "Objek wisata ini terkenal dengan air terjunnya yang indah serta suasana alam yang sejuk dan asri, cocok untuk trekking dan menikmati keindahan alam."
            ],
            [
                'latitude' => -7.303812395545981, 
                'longtitude'=> 108.06539401074126,
                'nama'=> 'Batu Mahpar Galunggung',
                'image' => "IMG-20210516-WA0099 1.png",
                'background' => 'Screenshot_2430-4080029859 1.png',
                "deskripsi"=> "Batu Mahpar adalah salah satu spot favorit para pendaki di Gunung Galunggung. Tempat ini menawarkan pemandangan batu besar yang megah dan panorama alam yang menakjubkan."
            ],
            [
                'latitude' => -7.143423049427282, 
                'longtitude'=> 108.16990042172397,
                'nama'=> 'Monumen Lam Alif',
                'image' => "image 4.png",
                'background' => 'pd7439cxr3dkh7u 1.png',
                "deskripsi"=> "Monumen Lam Alif di Tasikmalaya adalah landmark penting yang melambangkan nilai-nilai keislaman dan kebanggaan budaya masyarakat setempat. Terletak di pusat kota, monumen ini terdiri dari dua huruf Arab, \"Lam\" dan \"Alif,\" yang berdiri tegak, merepresentasikan keteguhan iman dan kesatuan umat Muslim."
            ],
            [
                'latitude' => -7.401410711189457, 
                'longtitude'=> 108.15057537134628,
                'nama'=> 'Situ Sanghiyang',
                'image' => "landmark-situ-sanghyang 1.png",
                'background' => 'objek-wisata-situ-sanghyang 1.png',
                "deskripsi"=> "Danau yang terletak di daerah pegunungan ini menawarkan pemandangan yang indah dengan air yang jernih dan suasana yang tenang, ideal untuk bersantai dan menikmati alam."
            ],
            [
                'latitude' => -7.36095214207572, 
                'longtitude'=> 107.99235720532943,
                'nama'=> 'Kampung Naga',
                'image' => "20160714kampung_naga.jpg 1.png",
                'background' => 'kampung-naga-di-tasikmalaya 1.png',
                "deskripsi"=> "Sebuah desa adat yang masih mempertahankan tradisi dan budaya Sunda yang kental. Pengunjung bisa belajar tentang kehidupan masyarakat adat dan melihat rumah-rumah tradisional."
            ],
            [
                'latitude' => -7.466750175720626, 
                'longtitude'=> 107.9477703,
                'nama'=> 'Kebun Teh Taraju',
                'image' => "5f17eb8baf20c 1.png",
                'background' => '6434203e3b20c 1.png',
                "deskripsi"=> "Nikmati keindahan alam yang asri di Kebun Teh Taraju, destinasi wisata yang terletak di Tasikmalaya, Jawa Barat. Dikelilingi oleh hamparan hijau perkebunan teh yang menenangkan, Kebun Teh Taraju menawarkan pemandangan spektakuler dan udara sejuk pegunungan yang menyegarkan."
            ],
            [
                'latitude' => -7.311574679201504, 
                'longtitude'=> 108.23942157116488,
                'nama'=> 'Taman Karang Resik',
                'image' => "IMG_20231124_224335_700_x_465_piksel-3544003407 1.png",
                'background' => '18-karang-resik-Azay-suliwa-arc-1536x1151 1.png',
                "deskripsi"=> "Tempat rekreasi keluarga yang lengkap dengan berbagai wahana permainan, taman bunga, dan area piknik. Tempat ini cocok untuk menghabiskan waktu bersama keluarga dan anak-anak."
            ],
            [
                'latitude' => -7.5711745881966035, 
                'longtitude'=> 108.074214,
                'nama'=> 'Goa Safarwadi Pamijahan',
                'image' => "3650664734 1.png",
                'background' => '7188b-pamijahan 1.png',
                "deskripsi"=> "Goa ini merupakan salah satu tempat ziarah yang dikenal di Tasikmalaya. Selain nilai religius, goa ini juga menawarkan keindahan formasi stalaktit dan stalagmit."
            ],
            [
                'latitude' => -7.349906401965165, 
                'longtitude'=> 108.11059378256738,
                'nama'=> 'Alun-alun Singaparna',
                'image' => "Alun-alun-Singaparna-di-Kabupaten-Tasikmalaya-kini-memiliki-wajah-baru-setelah-Pemdaprov-Jabar-setelah-dilakukan-revitalisasi 1.png",
                'background' => '81849_alun-alun-singaparna 1.png',
                "deskripsi"=> "Alun-alun ini merupakan pusat aktivitas masyarakat Tasikmalaya dengan taman yang asri dan fasilitas olahraga. Tempat ini menjadi titik berkumpulnya warga untuk berbagai kegiatan sosial dan rekreasi."
            ]
        ];
        return view("detail", ['data' => $allMap[$pos]]);
    }
}
