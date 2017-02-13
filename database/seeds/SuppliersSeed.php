<?php

use Illuminate\Database\Seeder;

class SuppliersSeed extends Seeder
{
   
    public function run()
    {
        //delete suppliers table records
        DB::table('suppliers')->delete();
        //insert some dummy records
        DB::table('suppliers')->insert(array(
			array('supplier_name'=>'Toko Berkawan','contact_name'=>'Dana','address'=>'Glodok Harco'),
			array('supplier_name'=>'Toko Nivico','contact_name'=>'Amin','address'=>'Glodok Makmur Lt 1 No: 28F'),
			array('supplier_name'=>'Toko Crown','contact_name'=>'Awen','address'=>'Glodok Harco'),
			array('supplier_name'=>'Toko Sinar Mas','contact_name'=>'Afung','address'=>'Glodok Harco'),
			array('supplier_name'=>'Toko Aroma Baru','address'=>'Jln. Kenari II / No. 4'),
			array('supplier_name'=>'Herry Alter s','address'=>'Jl. Masjid Abidin No. 3, Pondok Bambu'),
			array('supplier_name'=>'SANKYO','address'=>'Jl. Jend. Basuki Rahmat Raya No.18A'),
			array('supplier_name'=>'PT SHARP','address'=>'Jl. Swadaya IV Rawa Terate Cakung'),
			array('supplier_name'=>'Toko Gunung Makmur','contact_name'=>'Rudi','address'=>'Glodok Harco'),
			array('supplier_name'=>'Toko Samudera','contact_name'=>'Tata','address'=>'Glodok Harco'),
			array('supplier_name'=>'Toko Murata','address'=>'Glodok Harco'),
			array('supplier_name'=>'Toko Ating','address'=>'Glodok Harco'),
			array('supplier_name'=>'Toko Bengawan','address'=>'Glodok Makmur'),
			array('supplier_name'=>'Toko Beng','address'=>'Glodok Harco'),
			array('supplier_name'=>'Toko B 154','address'=>'Glodok Harco'),
			array('supplier_name'=>'Toko Buana','address'=>'Glodok Harco'),
			array('supplier_name'=>'Toko DC','address'=>'Glodok Harco'),
			array('supplier_name'=>'Toko YC','address'=>'Glodok Makmur No:29B'),
			array('supplier_name'=>'Toko GRC','address'=>'Glodok Harco Lt 1 blok:B No: 127'),
			array('supplier_name'=>'Toko Atlantic','contact_name'=>'Aliong','address'=>'Glodok Harco'),
			array('supplier_name'=>'Toko Johnson [TOA]','address'=>'Glodok Harco Lt1 blok: D No:214 Lt1 blok: D No:214'),
			array('supplier_name'=>'Toko Yusuf Electronics','address'=>'Ps. Manggis Guntur'),
			array('supplier_name'=>'Toko Heri Cool','address'=>''),
			array('supplier_name'=>'Toko Bahagia','address'=>'Jl Raya Jatinegara Timur No.16'),
			array('supplier_name'=>'Dian Cempaka','address'=>'Ruko Mega Grosir Cempaka Mas Blok J No.6 Jl Letjen Suprapto'),
			array('supplier_name'=>'PD Citra Medical Gas','address'=>'Jl Dr. Saharjo Swadaya II No.15'),
			array('supplier_name'=>'Cash','address'=>''),
			array('supplier_name'=>'Cash','address'=>''),
        ));
		
		
		,			
    }
}
