<?php

use Illuminate\Database\Seeder;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //delete suppliers table records
        DB::table('suppliers')->delete();
        //insert some dummy records
        DB::table('suppliers')->insert(array(
			array('supplier_name'=>'Toko Berkawan','contact_title'=>'','contact_name'=>'Dana','address'=>'Glodok Harco','city'=>'Jakarta','province'=>'DKI','country'=>'Indonesia','phone'=>'0216261546','fax'=>'0216495691','postal_code'=>''),
			array('supplier_name'=>'Toko Nivico','contact_title'=>'','contact_name'=>'Amin','address'=>'Glodok Makmur Lt 1 No: 28F','city'=>'Jakarta','province'=>'Jakarta Barat','country'=>'Indonesia','phone'=>'0216007586','fax'=>'0216391479','postal_code'=>''),
			array('supplier_name'=>'Toko Crown','contact_title'=>'','contact_name'=>'Awen','address'=>'Glodok Harco','city'=>'Jakarta','province'=>'','country'=>'Indonesia','phone'=>'0216295132','fax'=>'0216251268','postal_code'=>''),
			array('supplier_name'=>'Toko Sinar Mas','contact_title'=>'','contact_name'=>'Afung','address'=>'Glodok Harco','city'=>'Jakarta','province'=>'','country'=>'Indonesia','phone'=>'0216591135','fax'=>'0216266280','postal_code'=>''),
			array('supplier_name'=>'Toko Aroma Baru','contact_title'=>'','contact_name'=>'','address'=>'Jln. Kenari II / No. 4','city'=>'Jakarta','province'=>'DKI','country'=>'Indonesia','phone'=>'0213900761','fax'=>'0213900760','postal_code'=>''),
			array('supplier_name'=>'Herry Alter s','contact_title'=>'','contact_name'=>'','address'=>'Jl. Masjid Abidin No. 3, Pondok Bambu','city'=>'Jakarta Timur','province'=>'DKI','country'=>'Indonesia','phone'=>'0218614479','fax'=>'0218644479','postal_code'=>''),
			array('supplier_name'=>'SANKYO','contact_title'=>'','contact_name'=>'','address'=>'Jl. Jend. Basuki Rahmat Raya No.18A','city'=>'Jakarta Timur','province'=>'DKI','country'=>'Indonesia','phone'=>'0218660397','fax'=>'0218602403','postal_code'=>''),
			array('supplier_name'=>'PT SHARP','contact_title'=>'','contact_name'=>'','address'=>'Jl. Swadaya IV Rawa Terate Cakung','city'=>'Jakarta Timur','province'=>'DKI','country'=>'Indonesia','phone'=>'0214682407','fax'=>'0214682406','postal_code'=>''),
			array('supplier_name'=>'Toko Gunung Makmur','contact_title'=>'','contact_name'=>'Rudi','address'=>'Glodok Harco','city'=>'Jakarta','province'=>'Jakarta Barat','country'=>'Indonesia','phone'=>'0216495517','fax'=>'','postal_code'=>''),
			array('supplier_name'=>'Toko Samudera','contact_title'=>'','contact_name'=>'Tata','address'=>'Glodok Harco','city'=>'Jakarta','province'=>'Jakarta Barat','country'=>'Indonesia','phone'=>'0216260583','fax'=>'0216260584','postal_code'=>''),
			array('supplier_name'=>'Toko Murata','contact_title'=>'','contact_name'=>'','address'=>'Glodok Harco','city'=>'Jakarta','province'=>'Jakarta Barat','country'=>'Indonesia','phone'=>'0216492178','fax'=>'0216129978','postal_code'=>''),
			array('supplier_name'=>'Toko Ating','contact_title'=>'','contact_name'=>'','address'=>'Glodok Harco','city'=>'Jakarta','province'=>'Jakarta Barat','country'=>'Indonesia','phone'=>'0216498072','fax'=>'0216287119','postal_code'=>''),
			array('supplier_name'=>'Toko Bengawan','contact_title'=>'','contact_name'=>'','address'=>'Glodok Makmur','city'=>'Jakarta','province'=>'Jakarta Barat','country'=>'Indonesia','phone'=>'0216260620','fax'=>'','postal_code'=>''),
			array('supplier_name'=>'Toko Beng','contact_title'=>'','contact_name'=>'','address'=>'Glodok Harco','city'=>'Jakarta','province'=>'Jakarta Barat','country'=>'Indonesia','phone'=>'0216493968','fax'=>'','postal_code'=>''),
			array('supplier_name'=>'Toko B 154','contact_title'=>'','contact_name'=>'','address'=>'Glodok Harco','city'=>'Jakarta','province'=>'Jakarta Barat','country'=>'Indonesia','phone'=>'0216268933','fax'=>'0216909625','postal_code'=>''),
			array('supplier_name'=>'Toko Buana','contact_title'=>'','contact_name'=>'','address'=>'Glodok Harco','city'=>'Jakarta','province'=>'Jakarta Barat','country'=>'Indonesia','phone'=>'0216393932','fax'=>'','postal_code'=>''),
			array('supplier_name'=>'Toko DC','contact_title'=>'','contact_name'=>'','address'=>'Glodok Harco','city'=>'Jakarta','province'=>'Jakarta Barat','country'=>'Indonesia','phone'=>'0216268712','fax'=>'','postal_code'=>''),
			array('supplier_name'=>'Toko YC','contact_title'=>'','contact_name'=>'','address'=>'Glodok Makmur No:29B','city'=>'Jakarta','province'=>'Jakarta Barat','country'=>'Indonesia','phone'=>'0216015714','fax'=>'','postal_code'=>''),
			array('supplier_name'=>'Toko GRC','contact_title'=>'','contact_name'=>'','address'=>'Glodok Harco Lt 1 blok:B No: 127','city'=>'Jakarta','province'=>'Jakarta Barat','country'=>'Indonesia','phone'=>'0216293238','fax'=>'0216692627','postal_code'=>''),
			array('supplier_name'=>'Toko Atlantic','contact_title'=>'','contact_name'=>'Aliong','address'=>'Glodok Harco','city'=>'Jakarta','province'=>'Jakarta Barat','country'=>'Indonesia','phone'=>'0216591371','fax'=>'','postal_code'=>''),
			array('supplier_name'=>'Toko Johnson [TOA]','contact_title'=>'','contact_name'=>'','address'=>'Glodok Harco Lt1 blok: D No:214 Lt1 blok: D No:214','city'=>'Jakarta','province'=>'Jakarta Barat','country'=>'Indonesia','phone'=>'0216593935','fax'=>'0216490962','postal_code'=>''),
			array('supplier_name'=>'Toko Yusuf Electronics','contact_title'=>'','contact_name'=>'','address'=>'Ps. Manggis Guntur','city'=>'Jakarta','province'=>'DKI','country'=>'Indonesia','phone'=>'','fax'=>'','postal_code'=>''),
			array('supplier_name'=>'Toko Heri Cool','contact_title'=>'','contact_name'=>'','address'=>'','city'=>'Jakarta','province'=>'DKI','country'=>'Indonesia','phone'=>'','fax'=>'','postal_code'=>''),
			array('supplier_name'=>'Toko Bahagia','contact_title'=>'','contact_name'=>'','address'=>'Jl Raya Jatinegara Timur No.16','city'=>'Jakarta','province'=>'DKI','country'=>'Indonesia','phone'=>'0218195961','fax'=>'0218590058','postal_code'=>''),
			array('supplier_name'=>'Dian Cempaka','contact_title'=>'','contact_name'=>'','address'=>'Ruko Mega Grosir Cempaka Mas Blok J No.6 Jl Letjen Suprapto','city'=>'Jakarta','province'=>'DKI','country'=>'Indonesia','phone'=>'0212488505','fax'=>'0219163383','postal_code'=>''),
			array('supplier_name'=>'PD Citra Medical Gas','contact_title'=>'','contact_name'=>'','address'=>'Jl Dr. Saharjo Swadaya II No.15','city'=>'Jakarta Selatan','province'=>'DKI','country'=>'Indonesia','phone'=>'0218318487','fax'=>'0218310033','postal_code'=>''),
			array('supplier_name'=>'Cash','contact_title'=>'','contact_name'=>'','address'=>'','city'=>'Jakarta','province'=>'','country'=>'Indonesia','phone'=>'','fax'=>'','postal_code'=>''),
			array('supplier_name'=>'Cash','contact_title'=>'','contact_name'=>'','address'=>'','city'=>'Jakarta','province'=>'','country'=>'Indonesia','phone'=>'','fax'=>'','postal_code'=>''),
        ));
    }
}
