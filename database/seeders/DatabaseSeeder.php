<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
            'Brand' => "Adidas",
            'Size_1' => "9",
            'Size_2' => "10",
            'Size_3' => "11",
            'Gender' => "Male",
            'Product_Name' => 'FLUIDFLOW 2.0 SHOES',
            'Description' => ' 
            - Lace closure
            - Knit textile upper
            - Breathable feel
            - Textile lining
            - Bounce midsole
            - Synthetic outsole',
            'Price' => '4300',
            'Images' => 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/2bcc7b3fc0164b349f5aaed201048fe1_9366/Fluidflow_2.0_Shoes_Blue_GW4012_01_standard.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Adidas",
            'Size_1' => "9",
            'Size_2' => "10",
            'Size_3' => "11",
            'Gender' => "Male",
            'Product_Name' => '4DFWD X PARLEY SHOES',
            'Description' => '
            - Sock-like fit
            - Lace closure
            - Textile upper
            - Snug, cushioned feel
            - Impact-absorbing lattice structure
            - adidas 4D midsole
            - Midsole drop: 11 mm (heel: 30 mm / forefoot: 19 mm)
            - Stretchweb rubber outsole',
            'Price' => '14000',
            'Images' => 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/d934c260d8eb4e699908aecb00dc8e5d_9366/adidas_4DFWD_x_Parley_Shoes_Blue_GX6604_01_standard.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Adidas",
            'Size_1' => "9",
            'Size_2' => "10",
            'Size_3' => "11",
            'Gender' => "Male",
            'Product_Name' => 'RUN FALCON 2.0 SHOES',
            'Description' => '
            - Durable outsole.
            - Lace closure.
            - Sandwich mesh upper.
            - Lightweight breathable feel.
            - EVA midsole
            - Supportive no-sew heel',
            'Price' => '2800',
            'Images' => 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/08bfbed8550d47f896b3aed100e393bb_9366/Run_Falcon_2.0_Shoes_Grey_GV9559_01_standard.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Adidas",
            'Size_1' => "9",
            'Size_2' => "10",
            'Size_3' => "11",
            'Gender' => "Male",
            'Product_Name' => 'LITE RACER REBOLD SHOES',
            'Description' => '
            -Lace closure
            -Mesh upper with no-sew elements
            -Cushioned collar
            -Sculpted Cloudfoam midsole
            -Synthetic outsole
            -Primegreen
            -Fit:REGULAR
            -Material composition:TEXTILE/SYNTHETICS',
            'Price' =>'3500',
            'Images' => 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/af07915f24824cf190f6aed70136dc45_9366/Lite_Racer_Rebold_Shoes_Blue_GX4221_01_standard.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Adidas",
            'Size_1' => "9",
            'Size_2' => "10",
            'Size_3' => "11",
            'Gender' => "Male",
            'Product_Name' => 'HYPERTURF SHOES',
            'Description' => '
            - Regular fit
            - Speed lacing closure
            - Ripstop, nubuck, suede and mesh upper
            - Textile lining
            - Adiprene + cushioning
            - Rubber outsole',
            'Price' => '7500',
            'Images' => 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/b728c961374b4dfa9310aed7018991c0_9366/Hyperturf_Shoes_Green_HQ3978_01_standard.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Adidas",
            'Size_1' => "9",
            'Size_2' => "10",
            'Size_3' => "11",
            'Gender' => "Male",
            'Product_Name' => 'Galaxy 6 SHOES',
            'Description' => '
            -Regular fit
            -Lace closure
            -Breathable mesh upper
            -Textile lining
            -Cloudfoam midsole
            -OrthoLite® sockliner
            -RECYCLED MATERIALS PRIME - PRIMEGREEN',
            'Price' => '2800',
            'Images' => 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a3b3c26ba11f450a9f91ae9b00f43cb9_9366/Galaxy_6_Shoes_Black_GW3847_01_standard.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Adidas",
            'Size_1' => "9",
            'Size_2' => "10",
            'Size_3' => "11",
            'Gender' => "Male",
            'Product_Name' => 'DROPSET TRAINER SHOES',
            'Description' => '
            - Regular fit
            - Textile upper with padded collar
            - Textile lining
            - Lace closure
            - Durable, stable feel
            - Dual-density midsole with softer forefoot and stiffer heel',
            'Price' => '6500',
            'Images' => 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/97eb0a78b80849b7a64bae6f01195a9f_9366/Dropset_Trainer_Shoes_Black_GW3898_01_standard.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Adidas",
            'Size_1' => "9",
            'Size_2' => "10",
            'Size_3' => "11",
            'Gender' => "Male",
            'Product_Name' => 'ADILETTE AYOON SLIDES',
            'Description' => '
            - Slip-on
            - EVA upper
            - Ultra-soft feel
            - EVA outsole',
            'Price' => '2600',
            'Images' => 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/b15bb386306649eb8c84ae9400f4b9f4_9366/Adilette_Ayoon_Slides_Beige_GX7064_01_standard.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Adidas",
            'Size_1' => "9",
            'Size_2' => "10",
            'Size_3' => "11",
            'Gender' => "Male",
            'Product_Name' => 'STRUTTER SHOES',
            'Description' => '
            - Lace closure
            - Coated leather upper
            - Rubber outsole; Textile lining
            - Adibouncy lightweight EVA sockliner',
            'Price' => '3300',
            'Images' => 'https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/7dd961e29e74400fa0a8ac3301472a26_9366/Strutter_Shoes_White_FY8492_01_standard.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Adidas",
            'Size_1' => "9",
            'Size_2' => "10",
            'Size_3' => "11",
            'Gender' => "Male",
            'Product_Name' => 'BREAKNET COURT LIFESTYLE SHOES',
            'Description' => '
            - Regular fit
            - Lace closure
            - Synthetic leather upper
            - Textile lining
            - Rubber outsole',
            'Price' => '3100',
            'Images' => 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/e97cafe76f8249c193b2aed80136edba_9366/Breaknet_Court_Lifestyle_Shoes_White_GZ4960_01_standard.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Puma",
            'Size_1' => "9",
            'Size_2' => "10",
            'Size_3' => "11",
            'Gender' => "Male",
            'Product_Name' => 'DEVIATE NITRO 2 RUNNING SHOES MEN',
            'Description' => '
            - Breathable mesh upper
            - Reflective design elements
            - TPU heel spoiler
            - Best for: Neutral pronators
            - Cushioning level: Max
            - Heel-to-toe drop: 6mm
            - PUMA Formstrip on the lateral side',
            'Price' => '8800',
            'Images' => 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_1500,h_1500/global/376807/03/sv01/fnd/PHL/fmt/png/Deviate-NITRO-'
        ]);
        DB::table('products')->insert([
            'Brand' => "Puma",
            'Size_1' => "9",
            'Size_2' => "10",
            'Size_3' => "11",
            'Gender' => "Male",
            'Product_Name' => 'TRC BLAZE SWxP SNEAKERS',
            'Description' => '
            - EVA midsole
            - Mesh upper
            - Rubber outsole
            - PUMA Cat Logo on the tongue and heel',
            'Price' => '6600',
            'Images' => 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_1500,h_1500/global/387510/02/sv01/fnd/PHL/fmt/png/TRC-Blaze-SWxP-Sneakers'
        ]);
    
        DB::table('products')->insert([
            'Brand' => "Puma",
            'Size_1' => "9",
            'Size_2' => "10",
            'Size_3' => "11",
            'Gender' => "Male",
            'Product_Name' => 'SHUFFLE MID TRAINERS',
            'Description' => '
            - Midsole: Rubber
            - Outsole: Rubber
            - Upper: Synthetic Leather, Suede',
            'Price' => '3040',
            'Images' => 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_1500,h_1500/global/380748/01/sv01/fnd/PHL/fmt/png/Shuffle-Mid-Trainers'
        ]);
        DB::table('products')->insert([
            'Brand' => "Puma",
            'Size_1' => "9",
            'Size_2' => "10",
            'Size_3' => "11",
            'Gender' => "Male",
            'Product_Name' => 'ELECTRON E PRO TRAINERS',
            'Description' => '
            - Breathable mesh upper with synthetic panels
            - Cushioned footbed for optimum comfort
            - Padded tongue
            - Elastic band on heel
            - PUMA Cat Logo at lateral toes and tongue
            - PUMA Wordmark at heel',
            'Price' => '3440',
            'Images' => 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_1500,h_1500/global/380209/01/sv01/fnd/PHL/fmt/png/Electron-E-Pro-Trainers'
        ]);
        DB::table('products')->insert([
            'Brand' => "Puma",
            'Size_1' => "9",
            'Size_2' => "10",
            'Size_3' => "11",
            'Gender' => "Male",
            'Product_Name' => 'FUSION NITRO TEAM BASKETBALL SHOES',
            'Description' => '
            - Low boot
            - FUZIONFIT+ adaptive compression band on upper for unparalleled fit and lock-down
            - Highly technical and flexible engineered upper for enhanced on-foot feel
            - NITRO FOAM advanced technology provides superior responsiveness and cushioning in a lightweight package
            - Full coverage outsole with PUMA s high-abrasion rubber compound for durability and traction',
            'Price' => '6200',
            'Images' => 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_1500,h_1500/global/377035/10/sv01/fnd/PHL/fmt/png/Fusion-Nitro-Team-Basketball-Shoes'
        ]);
        DB::table('products')->insert([
            'Brand' => "Puma",
            'Size_1' => "6",
            'Size_2' => "7",
            'Size_3' => "8",
            'Gender' => "Female",
            'Product_Name' => 'SPORTY VOLA WOMEN`S SANDALS',
            'Description' => '
            - Textile strap upper with adjustable hook-and-loop closure
            - Comfort footbed
            - Elevated EVA midsole
            - PUMA Cat Logo on footbed, strap and midsole
            - PUMA Wordmark at heel',
            'Price' => '2400',
            'Images' => "https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_1500,h_1500/global/384132/03/sv01/fnd/PHL/fmt/png/Sporty-Vola-Women's-Sandals"
        ]);
        DB::table('products')->insert([
            'Brand' => "Puma",
            'Size_1' => "8",
            'Size_2' => "9",
            'Size_3' => "10",
            'Gender' => "Male",
            'Product_Name' => 'SLIPSTREAM RUNAWAY SNEAKERS WOMEN',
            'Description' => '
            - Leather upper
            - Rubber outsole
            - PUMA Formstrip on the medial and lateral sides
            - PUMA Cat Logo on the heel',
            'Price' => '5200',
            'Images' => 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_1500,h_1500/global/386745/01/sv01/fnd/PHL/fmt/png/Slipstream-Runway-Sneakers-Women'
        ]);
        DB::table('products')->insert([
            'Brand' => "Puma",
            'Size_1' => "7",
            'Size_2' => "8",
            'Size_3' => "9",
            'Gender' => "Female",
            'Product_Name' => 'SUEDE MAYU WOMEN`S TRAINERS',
            'Description' => '
            - CMEVA: PUMA´s compression-moulded EVA material for lightweight performance
            - Low boot
            - Suede upper
            - EVA midsole
            - Rubber outsole
            - PUMA Formstrip to the side
            - Debossed and foil printed PUMA No. 2 Logo on quarter panel and heel
            - Woven PUMA Archive No. 1 Label screen printed on tongue',
            'Price' => '6300',
            'Images' => "https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_1500,h_1500/global/380686/19/sv01/fnd/PHL/fmt/png/Suede-Mayu-Women's-Trainers"
        ]);
        DB::table('products')->insert([
            'Brand' => "Puma",
            'Size_1' => "6",
            'Size_2' => "7",
            'Size_3' => "8",
            'Gender' => "Female",
            'Product_Name' => 'ROSE METALLIC POP WOMEN`S TRAINERS',
            'Description' => '
            - Modern, organic silhouette
            - Mesh upper with stitched-on webbing at quarter
            - IMEVA midsole
            - Rubber outsole
            - Metallic details
            - PUMA Cat Logo at tongue
            - PUMA Wordmark at lateral sides',
            'Price' => '3040',
            'Images' => "https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_1500,h_1500/global/381080/03/sv01/fnd/PHL/fmt/png/Rose-Metallic-Pop-Women's-Trainers"
        ]);
        DB::table('products')->insert([
            'Brand' => "Puma",
            'Size_1' => "6",
            'Size_2' => "7",
            'Size_3' => "8",
            'Gender' => "Female",
            'Product_Name' => 'CARINA LEATHER WOMEN`S TRAINER',
            'Description' => '
            - Tennis-inspired silhouette
            - Bootie construction
            - Premium leather upper
            - Cushioned footbed for optimum comfort
            - Rubber outsole for grip
            - Lace closure for a snug fit
            - PUMA Formstrip at medial and lateral sides
            - PUMA Logo at lateral side and tongue
            - PUMA Cat Logo at heel',
            'Price' => '3200',
            'Images' => "https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_1500,h_1500/global/370325/07/sv01/fnd/PHL/fmt/png/Carina-Leather-Women's-Trainers"
        ]);
        DB::table('products')->insert([
            'Brand' => "Vans",
            'Size_1' => "9",
            'Size_2' => "10",
            'Size_3' => "11",
            'Gender' => "Male",
            'Product_Name' => 'OLD SKOOL SHOE',
            'Description' => '
            - Durable suede
            - Canvas uppers
            - Re-enforced toe caps
            - Supportive padded collars
            - Signature rubber waffle outsoles',
            'Price' => '9743',
            'Images' => 'https://images.vans.com/is/image/Vans/VN0A4BW2RV2-HERO?hei=494&wid=492&qlt=50&resMode=sharp2&op_sum=0.9,1.0,8,0'
        ]);
        DB::table('products')->insert([
            'Brand' => "Vans",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'NATHAN FLORENCE ULTRA RANGE VR3 SHOE',
            'Description' => '
            - Nathan Florence signature collection.
            - FOOTBED: The new EcoCush™ midsole is made using at least 50% biobased EVA foam partially derived from plant-based sources per the ASTM D6866-16 testing standard.
            - OUTSOLE: The new EcoWaffle™ outsole uses an all new rubber compound made with responsibly sourced natural rubber instead of petroleum derived synthetic rubber. This new rubber compound was developed and engineered to maintain the grip and durability Vans has been known for since ’66.',
            'Price' => '7451',
            'Images' => 'https://images.vans.com/is/image/Vans/VN0A4BXB458-HERO?hei=494&wid=492&qlt=50&resMode=sharp2&op_sum=0.9,1.0,8,0'
        ]);
        DB::table('products')->insert([
            'Brand' => "Vans",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'SK8-HI DEL PATO MTE-2 SHOE',
            'Description' => '
            - PRIMALOFT 
            - ALL-TRAC™ 
            - OrthoLite®',
            'Price' => '8597',
            'Images' => 'https://images.vans.com/is/image/Vans/VN0A5JMNY3U-HERO?hei=494&wid=492&qlt=50&resMode=sharp2&op_sum=0.9,1.0,8,0'
        ]);
        DB::table('products')->insert([
            'Brand' => "Vans",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'ULTRA RANGE EXO SE SHOE',
            'Description' => '
            - Suede
            - Canvas
            - Synthetic ',
            'Price' => '5731',
            'Images' => 'https://images.vans.com/is/image/Vans/VN0A4UWM7Z2-HERO?hei=494&wid=492&qlt=50&resMode=sharp2&op_sum=0.9,1.0,8,0'
        ]);
        DB::table('products')->insert([
            'Brand' => "Vans",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'SLIP ON STACKED SHOE',
            'Description' => '
            - Sturdy canvas uppers
            - Bumpers
            - Exaggerated outsoles
            - Translucent foxing tape ',
            'Price' => '4585',
            'Images' => 'https://images.vans.com/is/image/Vans/VN0A4TZV9X1-ALT1?hei=494&wid=492&qlt=50&resMode=sharp2&op_sum=0.9,1.0,8,0'
        ]);
        DB::table('products')->insert([
            'Brand' => "Vans",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'SK8-HI TAPERED STCKFORM SHOE',
            'Description' => '
            - Vans’ legendary high top shoe redesigned with a more slender silhouette
            - Upgraded with a 34 mm platform height
            - Lace-up closure
            - Signature rubber waffle outsoles ',
            'Price' => '5158',
            'Images' => 'https://images.vans.com/is/image/Vans/VN0A5JMKBMX-HERO?hei=494&wid=492&qlt=50&resMode=sharp2&op_sum=0.9,1.0,8,0'
        ]);
        DB::table('products')->insert([
            'Brand' => "World Balance",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'FIRST SERVE M',
            'Description' => '
            - Mesh
            - Man-made leather
            - Midfoot shank
            - Gum rubber outsole ',
            'Price' => '2199',
            'Images' => 'https://cdn.shopify.com/s/files/1/0606/6644/6073/products/WBFIRSTSERVEMWHITE_1_1800x1800.jpg?v=1665553684'
        ]);
        DB::table('products')->insert([
            'Brand' => "World Balance",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'SPIN CYCLE',
            'Description' => '
            - Mesh
            - Man-made leather
            - Durable rubber outsole
            - Terra soft insole system',
            'Price' => '2299',
            'Images' => 'https://cdn.shopify.com/s/files/1/0606/6644/6073/products/WBSPINCYCLEWHITE_1_1800x1800.jpg?v=1663654689'
        ]);
        DB::table('products')->insert([
            'Brand' => "World Balance",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'ZETA RUNNER M',
            'Description' => '
            - Knit
            - Sock-like fit
            - Durable rubber outsole
            - Trampolite
            - Bounce Pad Insole System',
            'Price' => '1999',
            'Images' => 'https://cdn.shopify.com/s/files/1/0606/6644/6073/products/WBZETARUNNERM_WHITE_1_1800x1800.jpg?v=1660184540'
        ]);
        DB::table('products')->insert([
            'Brand' => "World Balance",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'REVERIE ',
            'Description' => '
            - Mesh
            - Bubble tech
            - Bounce pad insole system',
            'Price' => '1999',
            'Images' => 'https://cdn.shopify.com/s/files/1/0606/6644/6073/products/WBREVERIEBLACK_1_1800x1800.jpg?v=1659512470'
        ]);
        DB::table('products')->insert([
            'Brand' => "World Balance",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'BLAZeR L',
            'Description' => '
            - Mesh
            - Man made leather
            - Trampolite
            - Bounce pad insole system',
            'Price' => '2099',
            'Images' => 'https://cdn.shopify.com/s/files/1/0606/6644/6073/products/WB_BLAZARL_WHITE-MINT_1_1800x1800.jpg?v=1664413013'
        ]);
        DB::table('products')->insert([
            'Brand' => "World Balance",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'DIME DROP',
            'Description' => '
            - Mesh
            - Man made leather
            - Trampolite
            - Bounce pad insole system',
            'Price' => '2499',
            'Images' => 'https://cdn.shopify.com/s/files/1/0606/6644/6073/products/WBDIMEDROPWHITE_1_1800x1800.jpg?v=1665633959'
        ]);
        DB::table('products')->insert([
            'Brand' => "Tom Ford",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'JAGO LOW TOP SNEAKER',
            'Description' => '
            - Tonal design
            - Front lace-up fastening
            - Round toe
            - Oversize rubber sole
            - Double pull-tab at the opening',
            'Price' => '56702',
            'Images' => 'https://is4.fwrdassets.com/images/p/fw/z/TFOF-WZ4_V1.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Tom Ford",
            'Size_1' => "6",
            'Size_2' => "7",
            'Size_3' => "8",
            'Gender' => "Female",
            'Product_Name' => 'PATENT PADLOCK POINTY NAKED 105 SANDAL',
            'Description' => '
            - Silk satin 
            - Ankle strap with buckle closure and signature padlock and key charms
            - Leather lining with Tom Ford printed logo
            - Pointed almond toe with gold-tone post heel',
            'Price' => '83048',
            'Images' => 'https://is4.fwrdassets.com/images/p/fw/z/TFOF-WZ50_V1.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Tom Ford",
            'Size_1' => "6",
            'Size_2' => "7",
            'Size_3' => "8",
            'Gender' => "Female",
            'Product_Name' => 'MIRROR NAKED PADLOCK 105 SANDAL',
            'Description' => '
            - Mirror leather 
            - Open pointed-toe
            - Ankle strap closure
            - Padlock charm detail
            - Stiletto heel',
            'Price' => '77321',
            'Images' => 'https://is4.fwrdassets.com/images/p/fw/z/TFOF-WZ28_V1.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Tom Ford",
            'Size_1' => "6",
            'Size_2' => "7",
            'Size_3' => "8",
            'Gender' => "Female",
            'Product_Name' => 'PADLOCK ANKLE BOOT 55',
            'Description' => '
            - Pointy Toe Shape
            - Signature Padlock Metal Hardware
            - 105 MM Iconic Metal Spike Heel
            - Adjustable Buckle Ankle Strap 
            - Buckles with Engraved Tom Ford logo
            - Lateral zip
            - LINING: Black leather
            - INSOLE: BLACK leather with Gold Embossed Tom Ford
            - SOLE: Leather',
            'Price' => '111686',
            'Images' => 'https://is4.fwrdassets.com/images/p/fw/z/TFOF-WZ11_V1.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Tom Ford",
            'Size_1' => "6",
            'Size_2' => "7",
            'Size_3' => "8",
            'Gender' => "Female",
            'Product_Name' => 'STAMPED CROC PADLOCK 105 BOOT',
            'Description' => '
            - Upper: calf leather
            - Lining: calf leather
            - sole: leather insole and sole
            - Pointed toe',
            'Price' => '140323',
            'Images' => 'https://is4.fwrdassets.com/images/p/fw/z/TFOF-WZ43_V1.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Tom Ford",
            'Size_1' => "6",
            'Size_2' => "7",
            'Size_3' => "8",
            'Gender' => "Female",
            'Product_Name' => 'ANKLE BOOTS',
            'Description' => '
            - Material: Black and Silver Quilted Leather
            - Suede',
            'Price' => '84541',
            'Images' => 'https://www.chanel.com/images//t_one///q_auto:good,f_auto,fl_lossy,dpr_1.2/w_620/ankle-boots-silver-black-glittered-tulle-grosgrain-glittered-tulle-grosgrain-packshot-artistique-vue1-g39710y56355k5362-9516417384478.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Tom Ford",
            'Size_1' => "6",
            'Size_2' => "7",
            'Size_3' => "8",
            'Gender' => "Female",
            'Product_Name' => 'LOAFERS',
            'Description' => '
            - Patent Calfskin & Metal
            - Black',
            'Price' => '75943',
            'Images' => 'https://www.chanel.com/images//t_one///q_auto:good,f_auto,fl_lossy,dpr_1.2/w_620/loafers-black-patent-calfskin-metal-patent-calfskin-metal-packshot-artistique-vue1-g39697x5682894305-9516401819678.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Gucci",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'MEN`S RHYTON SNEAKER',
            'Description' => '
            - Protect from direct light, heat and rain. Should it become wet, dry it immediately with a soft cloth
            - Fill shoe with tissue paper to help maintain the shape and absorb humidity, then store in the provided flannel bag and box
            - Clean with a soft, dry cloth or brush',
            'Price' => '51011',
            'Images' => 'https://media.gucci.com/style/DarkGray_Center_0_0_800x800/1664264711/725932_FAA1P_1155_001_100_0000_Light-Mens-Rhyton-sneaker.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Gucci",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'MEN`S GG SCREENER SNEAKER',
            'Description' => '
            - Protect from direct light, heat and rain. Should it become wet, dry it immediately with a soft cloth
            - Fill shoe with tissue paper to help maintain the shape and absorb humidity, then store in the provided flannel bag and box
            - Clean with a soft, dry cloth or brush',
            'Price' => '54450',
            'Images' => 'https://media.gucci.com/style/DarkGray_Center_0_0_800x800/1664266504/576223_FAA3T_4551_001_100_0000_Light-Mens-GG-Screener-sneaker.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Gucci",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'MEN`S GUCCI BASKET SNEAKER',
            'Description' => '
            - Rubber Interlocking G patch
            - Contrast padding at the ankle
            - Gucci logo detail
            - Rubber Interlocking G at the side
            - Additional pair of laces included
            - Rubber sole
            - Lace-up closure
            - Low heel',
            'Price' => '54450',
            'Images' => 'https://media.gucci.com/style/HEXE0E8E5_Center_0_0_800x800/1658852140/722749_2SH80_1064_001_100_0000_Light-Mens-Gucci-Basket-sneaker.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Gucci",
            'Size_1' => "8",
            'Size_2' => "9",
            'Size_3' => "10",
            'Gender' => "Male",
            'Product_Name' => 'ADIDAS x GUCCI WEDGE GAZELLE SNEAKER',
            'Description' => '
            - Metallic gold leather trim
            - Adidas x Gucci
            - Gucci Trefoil label
            - Gucci Trefoil print
            - 3-Stripe insert
            - Gazelle print
            - Rubber sole
            - Additional pair of laces included
            - Lace-up closure
            - High heel',
            'Price' => '52730',
            'Images' => 'https://media.gucci.com/style/HEXE0E8E5_Center_0_0_800x800/1661961686/725628_AAA2M_8043_001_100_0000_Light-adidas-x-Gucci-wedge-Gazelle-sneaker.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Gucci",
            'Size_1' => "8",
            'Size_2' => "9",
            'Size_3' => "10",
            'Gender' => "Male",
            'Product_Name' => 'WOMEN`S ACE EMBROIDERED SNEAKER',
            'Description' => '
            - White leather
            - Green and red Web
            - Gold thread-embroidered bee
            - Red leather detail on the heel of one shoe and green on the other
            - Rubber sole
            - Flat',
            'Price' => '48718',
            'Images' => 'https://media.gucci.com/style/DarkGray_Center_0_0_800x800/1582298103/454551_02JP0_9064_001_098_0000_Light-Womens-Ace-embroidered-sneaker.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Gucci",
            'Size_1' => "8",
            'Size_2' => "9",
            'Size_3' => "10",
            'Gender' => "Female",
            'Product_Name' => 'WOMEN`S GUCI RUN SNEAKER',
            'Description' => '
            - Women`s
            - Rubber Interlocking G detail
            - Gucci logo at back outersole
            - Bi-color rubber sole
            - Loop detail at the back
            - Additional pair of laces included
            - Lace-up closure',
            'Price' => '51011',
            'Images' => 'https://media.gucci.com/style/HEXEAF2DC_Center_0_0_800x800/1659595546/714660_USM10_8442_001_100_0000_Light-Womens-Gucci-Run-sneaker.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Gucci",
            'Size_1' => "8",
            'Size_2' => "9",
            'Size_3' => "10",
            'Gender' => "Female",
            'Product_Name' => 'BLONDIE WOMEN`S ANKLE BOOTS',
            'Description' => '
            - Women`s
            - Gold-toned hardware
            - Round Interlocking G detail
            - Leather sole
            - Zip closure
            - Mid-heel',
            'Price' => '79669',
            'Images' => 'https://media.gucci.com/style/HEXEAF2DC_Center_0_0_800x800/1662416121/700016_C6G00_8351_001_100_0000_Light-Gucci-Blondie-womens-ankle-boot.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Gucci",
            'Size_1' => "8",
            'Size_2' => "9",
            'Size_3' => "10",
            'Gender' => "Female",
            'Product_Name' => 'GUCCI LOVELIGHT CRYSTAL BALLET WITH HORSEBIT',
            'Description' => '
            - Women`s
            - Gold-toned hardware
            - Metallic silver leather trim
            - Red leather heart detail on insole
            - Horsebit detail
            - Leather sole',
            'Price' => '52730',
            'Images' => 'https://media.gucci.com/style/HEXEAF2DC_Center_0_0_2400x2400/1656519346/707703_KSP20_8461_001_100_0000_Light-Gucci-Lovelight-crystal-ballet-flat-with-Horsebit.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "K-Swiss",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'TECHLOOM PRO SNEAKERS',
            'Description' => '
            - Engineered into a single layer; support, breathability, flex and strength are all strategically designed and placed in key areas where each of these specific features are needed.
            - Midsole/outsole compound developed for direct ground contact, enabling the use of less rubber on the outsole, significantly reducing the weight of the shoes
            - Propelium® is designed to maximize energy generation and provide superior comfort that will maintain midsole structural integrity longer than conventional EVA',
            'Price' => '6185',
            'Images' => 'https://is4.revolveassets.com/images/p4/n/z/AHPR-WZ53_V1.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "K-Swiss",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'CLOUD X 3 SHIFT SNEAKER',
            'Description' => '
            - Ultralight
            - Highly reactive
            - Better fit and breathability',
            'Price' => '9164',
            'Images' => 'https://is4.revolveassets.com/images/p4/n/z/ONR-WZ49_V2.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "K-Swiss",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'DISRUPTOR II SNEAKER',
            'Description' => '
            - Synthetic leather
            - Cowhide leather
            - Rubber sole for immense surface traction
            - Lightweight for easy movement throughout the day
            - Smooth and soft finish for visual impact
            - Retro style look from the 90’s
            - Removable insole to make room for inserts
            - Thick rubber sole for extra shock absorption
            - Padded tongue and collar',
            'Price' => '4295',
            'Images' => 'https://is4.revolveassets.com/images/p4/n/z/FILR-WZ76_V1.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "K-Swiss",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'MINOTAUR BASTILLE SNEAKER',
            'Description' => '
            - Leather upper with rubber sole
            - Made in Brazil
            - Lace-up front
            - Rubberized signature logo detail at sides',
            'Price' => '10595',
            'Images' => 'https://is4.revolveassets.com/images/p4/n/z/VEJA-WZ158_V1.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "K-Swiss",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'CLOUDNOVA SNEAKER',
            'Description' => '
            - Sustainability and style
            - Meet the Cloudeasy
            - The minimalist all-day sneaker',
            'Price' => '9164',
            'Images' => 'https://is4.revolveassets.com/images/p4/n/d/ONR-WZ39_V1.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "K-Swiss",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'COURT TIEBREAK SDE MEN`S SHOES',
            'Description' => '
            - Modern styling with classic heritage DNA.
            - Constructed of leather, suede, and textiles giving this style layers and depth to be colored.
            - Materialized in a myriad of different ways.
            - Branding is executed with debossed heritage shield logos.
            - Brand’s classic spellout logo.
            - Atop our iconic Classic VN bottom.
            - One piece lightweight rubber cupsole with a cushy EVA midsole',
            'Price' => '4600',
            'Images' => 'https://cdn.shopify.com/s/files/1/0615/7228/4641/products/KSM07012-003CourtTiebreakSdeMBlack_OW1_1400x.jpg?v=1661914158'
        ]);
        DB::table('products')->insert([
            'Brand' => "K-Swiss",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'MONTARA MEN`S SHOES',
            'Description' => '
            - Timeless style built for all day wear in any setting.
            - Retro inspirations blend with contemporary trends to yield a versatile.
            - Low profile sneaker brimming with comfort and style',
            'Price' => '3800',
            'Images' => 'https://cdn.shopify.com/s/files/1/0615/7228/4641/products/KSM06922-958MontaraMWhite-DarkDenim_OW1_1400x.jpg?v=1663749780'
        ]);
        DB::table('products')->insert([
            'Brand' => "K-Swiss",
            'Size_1' => "10",
            'Size_2' => "11",
            'Size_3' => "12",
            'Gender' => "Male",
            'Product_Name' => 'COURT PRO II CMF MEN`S SHOES',
            'Description' => '
            - Mark heel detail and memory foam sole for added comfort.
            - Easily from work to play.
            - Sleek, timeless style which shifts easily from day to night.
            - Leather upper
            - Metal D-rings
            - Iconic 5 stripe branding
            - Stitched 3-piece toe',
            'Price' => '5600',
            'Images' => 'https://cdn.shopify.com/s/files/1/0615/7228/4641/products/COURTPROIICMFMEN_SLOW4500346827_WHTMAJBLUVPRBLU03629-169M_OW1_73a6e9c6-db9a-4dd1-9d69-72eadf599f1c_1400x.jpg?v=1656398753'
        ]);
        DB::table('products')->insert([
            'Brand' => "Balenciaga",
            'Size_1' => "7",
            'Size_2' => "8",
            'Size_3' => "9",
            'Gender' => "Male",
            'Product_Name' => 'GLOW 90MM STRASS SANDALS',
            'Description' => '
            - Calf leather
            - Crystal embellishment
            - Thin straps
            - Open toe
            - Buckle-fastening ankle strap
            - Leather sole',
            'Price' => '100065',
            'Images' => 'https://cdn.shopify.com/s/files/1/0615/7228/4641/products/COURTPROIICMFMEN_SLOW4500346827_WHTMAJBLUVPRBLU03629-169M_OW1_73a6e9c6-db9a-4dd1-9d69-72eadf599f1c_1400x.jpg?v=1656398753'
        ]);
        DB::table('products')->insert([
            'Brand' => "Balenciaga",
            'Size_1' => "7",
            'Size_2' => "8",
            'Size_3' => "9",
            'Gender' => "Female",
            'Product_Name' => 'CAGOLE 90MM CRACKED PUMPS',
            'Description' => '
            - Lambskin
            - Decorative buckle detail
            - Pointed toe
            - Slip-on style
            - Branded insole
            - High 90mm heel',
            'Price' => '91488',
            'Images' => 'https://cdn-images.farfetch-contents.com/18/48/77/69/18487769_41483984_1000.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Balenciaga",
            'Size_1' => "7",
            'Size_2' => "8",
            'Size_3' => "9",
            'Gender' => "Male",
            'Product_Name' => 'TOURIST LOGO TOUCH-STRAP SANDALS',
            'Description' => '
            - Embroidered logo
            - Logo print to the side
            - Front touch-strap fastening
            - Open toe
            - Moulded footbed
            - Elasticated slingback strap
            - Rear touch-strap fastening
            - Rubber sole',
            'Price' => '47745',
            'Images' => 'https://cdn-images.farfetch-contents.com/18/50/90/16/18509016_40774461_1000.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Balenciaga",
            'Size_1' => "7",
            'Size_2' => "8",
            'Size_3' => "9",
            'Gender' => "Male",
            'Product_Name' => 'X CROCS™ PLATFORM POOL SLIDES',
            'Description' => '
            - Beige
            - Rubber
            - Platform sole
            - Open toe
            - Moulded footbed
            - Slip-on style
            - Cut-out detailing
            - Logo lettering',
            'Price' => '41169',
            'Images' => 'https://cdn-images.farfetch-contents.com/18/54/70/35/18547035_40241697_1000.jpg'
        ]);
        DB::table('products')->insert([
            'Brand' => "Balenciaga",
            'Size_1' => "7",
            'Size_2' => "8",
            'Size_3' => "9",
            'Gender' => "Female",
            'Product_Name' => 'BB LEATHER SANDALS',
            'Description' => '
            - Leather 
            - Embossed crocodile effect
            - Gold-tone logo plaque
            - Open toe
            - Backless 
            - Flat sole',
            'Price' => '44314',
            'Images' => 'https://cdn-images.farfetch-contents.com/15/16/44/09/15164409_27835536_1000.jpg'
        ]);
    }
}
