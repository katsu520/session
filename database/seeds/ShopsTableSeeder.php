<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //\DB::table('shops')->delete();

      /*$faker = Faker\Factory::create('ja_JP');

      for ($i = 0; $i < 300; $i++) {
        \DB::table('shops')->insert([
          'name' => $faker->name(),
          'address' => $faker->address(),
          'hp' => $faker->hp(),
        ]);
      }*/

        //テストデータを作成する書き方
        DB::table('shops')->insert([
      //北海道
      [
        'name' => "TIARE SURF",
        'address' => "〒001-0025北海道札幌市北区北25条西5丁目1−15 フラッツリド",
        'hp' => "https://www.asoview.com/item/activity/pln3000004911/?sort=asoview&destinationType=region&destinationId=rgn01&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "REAL DRIVE",
        'address' => "〒059-1742北海道勇払郡厚真町浜厚真",
        'hp' => "https://www.asoview.com/item/activity/pln3000022615/?sort=asoview&destinationType=region&destinationId=rgn01&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      //東北
      [
        'name' => "glassy",
        'address' => "〒018-1301秋田県由利本荘市岩城内道川字新鶴潟192-43",
        'hp' => "https://www.asoview.com/item/activity/pln3000025792/?sort=asoview&destinationType=region&destinationId=rgn02&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "CAN DO サーフィン塾 福島いわきセンター",
        'address' => "〒974-8222福島県いわき市岩間町",
        'hp' => "https://www.asoview.com/item/activity/pln3000019727/?sort=asoview&destinationType=region&destinationId=rgn02&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "サーファーズ アイランド",
        'address' => "〒983-0013宮城県仙台市宮城野区中野5-4-30",
        'hp' => "https://www.asoview.com/item/activity/pln3000017076/?sort=asoview&destinationType=region&destinationId=rgn02&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "CHP仙台",
        'address' => "〒983-0013宮城県仙台市 宮城野区中野",
        'hp' => "https://www.asoview.com/item/activity/pln3000010431/?sort=asoview&destinationType=region&destinationId=rgn02&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "surf grand nest",
        'address' => "〒983-0013宮城県仙台市宮城野区中野",
        'hp' => "https://www.asoview.com/item/activity/pln3000016435/?sort=asoview&destinationType=region&destinationId=rgn02&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "K-SURF",
        'address' => "〒028-1101岩手県上閉伊郡大槌町吉里吉里14-2-1 浪板海岸ヴィレッジ",
        'hp' => "https://www.asoview.com/item/activity/pln3000012561/?sort=asoview&destinationType=region&destinationId=rgn02&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "タスクサーフボード仙台店",
        'address' => "〒983-0001宮城県仙台市宮城野区中野",
        'hp' => "https://www.asoview.com/item/activity/pln3000017877/?sort=asoview&destinationType=region&destinationId=rgn02&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "atomoon",
        'address' => "〒015-0862秋田県由利本荘市小人町26-2むつ電器2F",
        'hp' => "https://www.asoview.com/item/activity/pln3000026681/?sort=asoview&destinationType=region&destinationId=rgn02&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "CARLSBAD",
        'address' => "〒986-0868宮城県石巻市恵み野4丁目15-13",
        'hp' => "https://www.asoview.com/item/activity/pln3000003877/?sort=asoview&destinationType=region&destinationId=rgn02&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "SHOCKER'Z ROBBY SURF STORE",
        'address' => "〒983-0013宮城県仙台市宮城野区中野字高松",
        'hp' => "https://www.asoview.com/item/activity/pln3000016897/?sort=asoview&destinationType=region&destinationId=rgn02&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "ウェイクサーフィン",
        'address' => "〒969-3285福島県耶麻郡猪苗代町長浜858",
        'hp' => "https://www.asoview.com/item/activity/pln3000019721/?sort=asoview&destinationType=region&destinationId=rgn02&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      //関東
      [
        'name' => "サンチャイルド千葉",
        'address' => "〒299-5107千葉県夷隅郡御宿町浜2163-93",
        'hp' => "https://www.asoview.com/item/activity/pln3000023979/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "SURFARI",
        'address' => "〒251-0035神奈川県藤沢市片瀬海岸3-21-9",
        'hp' => "https://www.asoview.com/item/activity/pln3000021355/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "SURFGYM",
        'address' => "〒251-0032神奈川県藤沢市片瀬5-13-19",
        'hp' => "https://www.asoview.com/item/activity/pln3000021635/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "セイルボーダーズ",
        'address' => "〒251-0035神奈川県藤沢市片瀬海岸1-11-20シルフィード湘南105",
        'hp' => "https://www.asoview.com/item/activity/pln3000021430/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "ロデオサーフビーチストア",
        'address' => "〒311-1311茨城県東茨城郡大洗町大貫町256-474",
        'hp' => "https://www.asoview.com/item/activity/pln3000027410/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "KAILOA",
        'address' => "〒251-0035神奈川県藤沢市片瀬海岸2-9-10ドルフィン片瀬101",
        'hp' => "https://www.asoview.com/item/activity/pln3000006032/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "ガレージワン",
        'address' => "〒251-0035神奈川県藤沢市片瀬海岸1-13-8",
        'hp' => "https://www.asoview.com/item/activity/pln3000001426/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "オーシャングライドマリン",
        'address' => "〒251-0035神奈川県藤沢市片瀬海岸2-8-17",
        'hp' => "https://www.asoview.com/item/activity/pln3000003869/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "hirokihayakawasurfingschool",
        'address' => "〒296-0001千葉県鴨川市横渚808-33",
        'hp' => "https://www.asoview.com/item/activity/pln3000027404/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "サーファーズサポート",
        'address' => "〒289-1305千葉県山武市本須賀3828-61",
        'hp' => "https://www.asoview.com/item/activity/pln3000006387/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "SUP&SURF KAIPOOH",
        'address' => "〒295-0103千葉県南房総市白浜町滝口5185-1シラハマ校舎301号室",
        'hp' => "https://www.asoview.com/item/activity/pln3000022895/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "P.D.SURF",
        'address' => "〒299-4303千葉県長生郡一宮町東浪見7525-1",
        'hp' => "https://www.asoview.com/item/activity/pln3000015060/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "エメラルドサーフ",
        'address' => "〒254-0823神奈川県平塚市虹ケ浜16-7-206",
        'hp' => "https://www.asoview.com/item/activity/pln3000018872/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "WATER DOOR",
        'address' => "〒251-0032神奈川県藤沢市片瀬4-10-15",
        'hp' => "https://www.asoview.com/item/activity/pln3000022480/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "SUNCHILD東京",
        'address' => "〒272-0034千葉県市川市市川3-18-4",
        'hp' => "https://www.asoview.com/item/activity/pln3000001642/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "ケーズサーフライド",
        'address' => "〒283-0113千葉県山武郡九十九里町不動堂450",
        'hp' => "https://www.asoview.com/item/activity/pln3000013764/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "New seeds",
        'address' => "〒160-0022東京都新宿区新宿3丁目38-1",
        'hp' => "https://www.asoview.com/item/activity/pln3000022885/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "Mau Surf",
        'address' => "〒283-0102千葉県山武郡九十九里町小関2323-5",
        'hp' => "https://www.asoview.com/item/activity/pln3000027911/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "Blue Splash",
        'address' => "〒262-0025千葉県千葉市花見川区花園1-14-2",
        'hp' => "https://www.asoview.com/item/activity/pln3000009991/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "The Roots",
        'address' => "〒283-0104千葉県山武郡九十九里町片貝6902-12",
        'hp' => "https://www.asoview.com/item/activity/pln3000017775/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "K2波乗りクラブ",
        'address' => "〒311-1311茨城県東茨城郡大洗町大貫町地崎",
        'hp' => "https://www.asoview.com/item/activity/pln3000025432/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "cccsurfshop",
        'address' => "〒251-0037神奈川藤沢市鵠沼海岸2-15-16",
        'hp' => "https://www.asoview.com/item/activity/pln3000026349/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "Active Family",
        'address' => "〒311-1305茨城県東茨城郡大洗町大貫町字前原下256-456",
        'hp' => "https://www.asoview.com/item/activity/pln3000005332/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "First Break surf&snow",
        'address' => "〒312-0023茨城県ひたちなか市大平2-3-1AHビル1F",
        'hp' => "https://www.asoview.com/item/activity/pln3000011839/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "ピュアスポーツクラブ",
        'address' => "〒251-0035神奈川県藤沢市片瀬海岸1-11-13",
        'hp' => "https://www.asoview.com/item/activity/pln3000008040/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "SURFCO",
        'address' => "〒294-0233千葉県館山市大神宮116-5",
        'hp' => "https://www.asoview.com/item/activity/pln3000024287/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "Wedge",
        'address' => "〒311-1301茨城県東茨城郡大洗町磯浜町8179-3",
        'hp' => "https://www.asoview.com/item/activity/pln3000000594/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "ラグーン湘南",
        'address' => "〒251-0035神奈川県藤沢市片瀬海岸2-10-22",
        'hp' => "https://www.asoview.com/item/activity/pln3000018412/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "サーフショップ&サーフィンスクールBEACH",
        'address' => "〒299-4323千葉県長生郡長生村一松戊3451-7",
        'hp' => "https://www.asoview.com/item/activity/pln3000003853/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "サンサーフ",
        'address' => "〒319-1112茨城県那珂郡東海村村松249-3",
        'hp' => "https://www.asoview.com/item/activity/pln3000006587/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "Charlie's Surf",
        'address' => "〒299-4303千葉県長生郡一宮町東浪見8543",
        'hp' => "https://www.asoview.com/item/activity/pln3000020817/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "プロサーファー一ノ瀬さゆり サーフィンスクール",
        'address' => "〒299-4303千葉県長生郡一宮町東浪見8543",
        'hp' => "https://www.asoview.com/item/activity/pln3000021585/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "OHANA surf",
        'address' => "〒251-0035神奈川県藤沢市片瀬海岸2-20-12",
        'hp' => "https://www.asoview.com/item/activity/pln3000001931/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "SKY SURF YOGA",
        'address' => "〒253-0053神奈川県茅ケ崎市東海岸北3丁目8-41",
        'hp' => "https://www.asoview.com/item/activity/pln3000003973/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "ホリデーサーフ",
        'address' => "〒248-0033神奈川県鎌倉市腰越3-24-5HOLIDAY",
        'hp' => "https://www.asoview.com/item/activity/pln3000019438/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "Fantasy island",
        'address' => "〒311-1311茨城県東茨城郡大洗町大貫町256-22",
        'hp' => "https://www.asoview.com/item/activity/pln3000003886/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "Leinz",
        'address' => "〒288-0024千葉県銚子市天王台9808",
        'hp' => "https://www.asoview.com/item/activity/pln3000000205/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "Life style shop OluOlu",
        'address' => "〒254-0075神奈川県平塚市中原2-16-6",
        'hp' => "https://www.asoview.com/item/activity/pln3000021106/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "LM surf design Tokyo surfing school",
        'address' => "〒108-0074東京都港区高輪３丁目",
        'hp' => "https://www.asoview.com/item/activity/pln3000022251/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "RAISE SURF",
        'address' => "〒260-0842千葉県千葉市中央区南町2-11-6S2ビル1F",
        'hp' => "https://www.asoview.com/item/activity/pln3000017948/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "リバティサーフ",
        'address' => "〒299-3203千葉県大網白里市四天木2574-63",
        'hp' => "https://www.asoview.com/item/activity/pln3000029155/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "ドロンズショップ",
        'address' => "〒253-0055神奈川県茅ヶ崎市中海岸4-1-12",
        'hp' => "https://www.asoview.com/item/activity/pln3000004575/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "トレジャーサーフ",
        'address' => "〒289-1732千葉県山武郡横芝光町横芝1495",
        'hp' => "https://www.asoview.com/item/activity/pln3000017410/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "HAPPY SURF",
        'address' => "〒289-0221千葉県香取郡神崎町神崎本宿2003-3",
        'hp' => "https://www.asoview.com/item/activity/pln3000003835/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "サーフショップ タイロン",
        'address' => "〒272-0034千葉県市川市市川1丁目",
        'hp' => "https://www.asoview.com/item/activity/pln3000021705/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "GLIDZ HOUSE",
        'address' => "〒254-0075神奈川県平塚市中原2-15",
        'hp' => "https://www.asoview.com/item/activity/pln3000027449/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "DEVICE",
        'address' => "〒323-0820栃木県小山市西城南6-12-10",
        'hp' => "https://www.asoview.com/item/activity/pln3000000644/?sort=asoview&destinationType=region&destinationId=rgn04&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      //甲信越
      [
        'name' => "T.K SURF",
        'address' => "〒942-0084新潟県上越市五智新町8-22",
        'hp' => "https://www.asoview.com/item/activity/pln3000014437/?sort=asoview&destinationType=region&destinationId=rgn05&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "WORKS",
        'address' => "〒950-2075新潟県新潟市西区松海ヶ丘4-5-6",
        'hp' => "https://www.asoview.com/item/activity/pln3000008561/?sort=asoview&destinationType=region&destinationId=rgn05&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "フェローサーフ＆カフェ",
        'address' => "〒400-0118山梨県甲斐市竜王3309-1",
        'hp' => "https://www.asoview.com/item/activity/pln3000004985/?sort=asoview&destinationType=region&destinationId=rgn05&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      //北陸
      [
        'name' => "Nan's Sea",
        'address' => "〒913-0057福井県坂井市三国町米ヶ脇4-4-28",
        'hp' => "https://www.asoview.com/item/activity/pln3000018497/?sort=asoview&destinationType=region&destinationId=rgn06&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "InD's",
        'address' => "〒920-0058石川県金沢市示野中町1丁目3番地",
        'hp' => "https://www.asoview.com/item/activity/pln3000026939/?sort=asoview&destinationType=region&destinationId=rgn06&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      //東海
      [
        'name' => "Approach Ocean Sports",
        'address' => "〒422-8054静岡県静岡市駿河区南安倍3-1-4",
        'hp' => "https://www.asoview.com/item/activity/pln3000019903/?sort=asoview&destinationType=region&destinationId=rgn07&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "SUP SHOP 海楽",
        'address' => "〒470-3321愛知県知多郡南知多町大字内海字小桝142番地13",
        'hp' => "https://www.asoview.com/item/activity/pln3000019778/?sort=asoview&destinationType=region&destinationId=rgn07&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "R2 SURF",
        'address' => "〒516-0053三重県志摩市阿児町国府2862",
        'hp' => "https://www.asoview.com/item/activity/pln3000015350/?sort=asoview&destinationType=region&destinationId=rgn07&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "LE-BA SURF",
        'address' => "〒517-0506三重県志摩市阿児町国府1-14",
        'hp' => "https://www.asoview.com/item/activity/pln3000001536/?sort=asoview&destinationType=region&destinationId=rgn07&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "CAPCELL",
        'address' => "〒440-0877愛知県豊橋市南松山町119",
        'hp' => "https://www.asoview.com/item/activity/pln3000014283/?sort=asoview&destinationType=region&destinationId=rgn07&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "ブレイズサーフ",
        'address' => "〒440-0874愛知県豊橋市寺沢町内原162",
        'hp' => "https://www.asoview.com/item/activity/pln3000025773/?sort=asoview&destinationType=region&destinationId=rgn07&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "白浜マリーナ",
        'address' => "〒415-0012静岡県下田市白浜2752-16",
        'hp' => "https://www.asoview.com/item/activity/pln3000003651/?sort=asoview&destinationType=region&destinationId=rgn07&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "ウォータース",
        'address' => "〒420-0042静岡県静岡市葵区駒形通6-6-1",
        'hp' => "https://www.asoview.com/item/activity/pln3000003965/?sort=asoview&destinationType=region&destinationId=rgn07&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "Marine Active Ripper X-SPORTS",
        'address' => "〒437-1413静岡県掛川市国安2808番地2号 大東温泉シートピア内",
        'hp' => "https://www.asoview.com/item/activity/pln3000029174/?sort=asoview&destinationType=region&destinationId=rgn07&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "Natty",
        'address' => "〒421-0523静岡県牧之原市波津1623-2",
        'hp' => "https://www.asoview.com/item/activity/pln3000009637/?sort=asoview&destinationType=region&destinationId=rgn07&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "RINE",
        'address' => "〒415-0028静岡県下田市吉佐美(多々戸)",
        'hp' => "https://www.asoview.com/item/activity/pln3000002158/?sort=asoview&destinationType=region&destinationId=rgn07&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "SUMMER eYe",
        'address' => "〒441-8125愛知県豊橋市野依台1-34-2",
        'hp' => "https://www.asoview.com/item/activity/pln3000016079/?sort=asoview&destinationType=region&destinationId=rgn07&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "IRIE COFFEE & SEA",
        'address' => "〒415-0012静岡県下田市白浜1737",
        'hp' => "https://www.asoview.com/item/activity/pln3000027157/?sort=asoview&destinationType=region&destinationId=rgn07&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "Playasurf",
        'address' => "〒517-0506三重県志摩市阿児町国府3877",
        'hp' => "https://www.asoview.com/item/activity/pln3000020856/?sort=asoview&destinationType=region&destinationId=rgn07&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "CRER surf room",
        'address' => "〒437-1202静岡県磐田市豊浜505",
        'hp' => "https://www.asoview.com/item/activity/pln3000025467/?sort=asoview&destinationType=region&destinationId=rgn07&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      //関西
      [
        'name' => "californiawave",
        'address' => "〒581-0801大阪府八尾市山城町1丁目2-6",
        'hp' => "https://www.asoview.com/item/activity/pln3000025654/?sort=asoview&destinationType=region&destinationId=rgn08&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "SOUTH BORDER 泉佐野",
        'address' => "〒598-0002大阪府泉佐野市中庄334-3",
        'hp' => "https://www.asoview.com/item/activity/pln3000027869/?sort=asoview&destinationType=region&destinationId=rgn08&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "nereid",
        'address' => "〒624-0841京都府舞鶴市引土263-10",
        'hp' => "https://www.asoview.com/item/activity/pln3000000610/?sort=asoview&destinationType=region&destinationId=rgn08&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "ホールドアウトサーフ",
        'address' => "〒547-0027大阪府大阪市平野区喜連2-5-90",
        'hp' => "https://www.asoview.com/item/activity/pln3000005617/?sort=asoview&destinationType=region&destinationId=rgn08&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "CLOVER SURF",
        'address' => "〒599-8236大阪府堺市中区深井沢町3261ハイツ深井1F",
        'hp' => "https://www.asoview.com/item/activity/pln3000015964/?sort=asoview&destinationType=region&destinationId=rgn08&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "SURF SHOP BULBOUS BOW",
        'address' => "〒591-8002大阪府堺市北区北花田町1-16",
        'hp' => "https://www.asoview.com/item/activity/pln3000029241/?sort=asoview&destinationType=region&destinationId=rgn08&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "アイランドブレイク",
        'address' => "〒583-0854大阪府羽曳野市軽里3-2-17",
        'hp' => "https://www.asoview.com/item/activity/pln3000006154/?sort=asoview&destinationType=region&destinationId=rgn08&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "SURF SOUND",
        'address' => "〒520-0101滋賀県大津市雄琴5-10-56",
        'hp' => "https://www.asoview.com/item/activity/pln3000001633/?sort=asoview&destinationType=region&destinationId=rgn08&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      //山陰・山陽
      [
        'name' => "Develop SURF＆SEA",
        'address' => "〒681-0001鳥取県岩美郡岩美町牧谷690-20",
        'hp' => "https://www.asoview.com/item/activity/pln3000002903/?sort=asoview&destinationType=region&destinationId=rgn09&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "PRO SHOP M.K",
        'address' => "〒732-0068広島県広島市東区牛田新町1-7-22",
        'hp' => "https://www.asoview.com/item/activity/pln3000006670/?sort=asoview&destinationType=region&destinationId=rgn09&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "バグース倉敷",
        'address' => "〒710-0845岡山県倉敷市西富井679-6",
        'hp' => "https://www.asoview.com/item/activity/pln3000029216/?sort=asoview&destinationType=region&destinationId=rgn09&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "マジックアイランド広島店",
        'address' => "〒730-0002広島県広島市西区楠木町1丁目15-4ファビス楠木101",
        'hp' => "https://www.asoview.com/item/activity/pln3000001388/?sort=asoview&destinationType=region&destinationId=rgn09&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "IL SURF",
        'address' => "〒699-0751島根県出雲市大社町杵築西2239-13",
        'hp' => "https://www.asoview.com/item/activity/pln3000021440/?sort=asoview&destinationType=region&destinationId=rgn09&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      //四国
      [
        'name' => "SURF SHOP MORE",
        'address' => "〒781-7414高知県安芸郡東洋町生見575-1",
        'hp' => "https://www.asoview.com/item/activity/pln3000025871/?sort=asoview&destinationType=region&destinationId=rgn10&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "Thursdays",
        'address' => "〒770-0923徳島県徳島市大道1丁目33",
        'hp' => "https://www.asoview.com/item/activity/pln3000006139/?sort=asoview&destinationType=region&destinationId=rgn10&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "ローカルエナジーサーフショップ",
        'address' => "〒779-1402徳島県阿南市桑野町花坂81-29",
        'hp' => "https://www.asoview.com/item/activity/pln3000018879/?sort=asoview&destinationType=region&destinationId=rgn10&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "TK サーフィンスクール",
        'address' => "〒789-1911高知県幡多郡黒潮町浮鞭953-1",
        'hp' => "https://www.asoview.com/item/activity/pln3000001156/?sort=asoview&destinationType=region&destinationId=rgn10&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "カアナパリ",
        'address' => "〒775-0501徳島県海部郡海陽町宍喰浦字松原97-10",
        'hp' => "https://www.asoview.com/item/activity/pln3000006641/?sort=asoview&destinationType=region&destinationId=rgn10&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "グレアサーフショップ",
        'address' => "〒771-0101徳島県徳島市川内町旭野365-3",
        'hp' => "https://www.asoview.com/item/activity/pln3000019956/?sort=asoview&destinationType=region&destinationId=rgn10&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "PAVILION SURF",
        'address' => "〒775-0502徳島県海部郡海陽町宍喰浦字松原215-1",
        'hp' => "https://www.asoview.com/item/activity/pln3000012205/?sort=asoview&destinationType=region&destinationId=rgn10&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      //九州
      [
        'name' => "SURF CITY 宮崎",
        'address' => "〒889-2162宮崎県宮崎市青島2-1-11",
        'hp' => "https://www.asoview.com/item/activity/pln3000019417/?sort=asoview&destinationType=region&destinationId=rgn11&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "See u",
        'address' => "〒889-2162宮崎県宮崎市青島1丁目4-10",
        'hp' => "https://www.asoview.com/item/activity/pln3000022989/?sort=asoview&destinationType=region&destinationId=rgn11&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "ハイサーフ",
        'address' => "〒889-2161宮崎県宮崎市加江田4710-13",
        'hp' => "https://www.asoview.com/item/activity/pln3000003545/?sort=asoview&destinationType=region&destinationId=rgn11&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "HADASHI",
        'address' => "〒887-0102宮崎県日南市富土4028-4",
        'hp' => "https://www.asoview.com/item/activity/pln3000016395/?sort=asoview&destinationType=region&destinationId=rgn11&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "KAZBO Surf and SUP",
        'address' => "〒894-0508鹿児島県奄美市笠利町用安1252-8",
        'hp' => "https://www.asoview.com/item/activity/pln3000024205/?sort=asoview&destinationType=region&destinationId=rgn11&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "ガッキーサーフショップ",
        'address' => "〒880-0912宮崎県宮崎市赤江262",
        'hp' => "https://www.asoview.com/item/activity/pln3000004692/?sort=asoview&destinationType=region&destinationId=rgn11&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "KENGORIA",
        'address' => "〒880-0841宮崎県宮崎市吉村町曽師中甲3104-6",
        'hp' => "https://www.asoview.com/item/activity/pln3000026617/?sort=asoview&destinationType=region&destinationId=rgn11&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "ゼウスハウス",
        'address' => "〒891-3103鹿児島県西之表市現和8724-31 ゼウスハウス",
        'hp' => "https://www.asoview.com/item/activity/pln3000027861/?sort=asoview&destinationType=region&destinationId=rgn11&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "オン ザ ビーチ",
        'address' => "〒883-0022宮崎県日向市平岩金ヶ浜2220",
        'hp' => "https://www.asoview.com/item/activity/pln3000004619/?sort=asoview&destinationType=region&destinationId=rgn11&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "mission",
        'address' => "〒819-1303福岡県糸島市志摩野北2457",
        'hp' => "https://www.asoview.com/item/activity/pln3000005051/?sort=asoview&destinationType=region&destinationId=rgn11&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "ディライトサーフィンサービス",
        'address' => "〒885-0036宮崎県都城市広原町10-6",
        'hp' => "https://www.asoview.com/item/activity/pln3000008460/?sort=asoview&destinationType=region&destinationId=rgn11&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "アクティブスポーツ・ガンコ",
        'address' => "〒899-2203鹿児島県県日置市東市来町伊作田7263-2",
        'hp' => "https://www.asoview.com/item/activity/pln3000005179/?sort=asoview&destinationType=region&destinationId=rgn11&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "pws surf",
        'address' => "〒883-0022宮崎県日向市平岩12293",
        'hp' => "https://www.asoview.com/item/activity/pln3000015761/?sort=asoview&destinationType=region&destinationId=rgn11&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "Rum Jungle",
        'address' => "〒880-0835宮崎市阿波岐原町前浜4276-399",
        'hp' => "https://www.asoview.com/item/activity/pln3000007355/?sort=asoview&destinationType=region&destinationId=rgn11&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "DearSurf",
        'address' => "〒883-0022宮崎県日向市平岩12131-5",
        'hp' => "https://www.asoview.com/item/activity/pln3000016172/?sort=asoview&destinationType=region&destinationId=rgn11&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      //沖縄
      [
        'name' => "沖縄ハイビサーフィンスクール",
        'address' => "〒904-0112沖縄県中頭郡北谷町浜川158 s276",
        'hp' => "https://www.asoview.com/item/activity/pln3000014928/?sort=asoview&destinationType=region&destinationId=rgn12&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "サーフサイドサービス ハイサイ",
        'address' => "〒904-0112沖縄県中頭郡北谷町浜川176-S288",
        'hp' => "https://www.asoview.com/item/activity/pln3000008151/?sort=asoview&destinationType=region&destinationId=rgn12&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "シーナサーフ",
        'address' => "〒904-0414沖縄県恩納村字前兼久167-1F",
        'hp' => "https://www.asoview.com/item/activity/pln3000001944/?sort=asoview&destinationType=region&destinationId=rgn12&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "PADOPADO OKINAWA",
        'address' => "〒901-0364沖縄県糸満市潮崎町3丁目15番地6号1-B",
        'hp' => "https://www.asoview.com/item/activity/pln3000016950/?sort=asoview&destinationType=region&destinationId=rgn12&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "SWELL",
        'address' => "〒906-0015沖縄県宮古島市平良久貝664-1",
        'hp' => "https://www.asoview.com/item/activity/pln3000025931/?sort=asoview&destinationType=region&destinationId=rgn12&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "OSG",
        'address' => "〒904-0417沖縄県国頭郡恩納村真栄田3",
        'hp' => "https://www.asoview.com/item/activity/pln3000016820/?sort=asoview&destinationType=region&destinationId=rgn12&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "よんな～海",
        'address' => "〒901-2224沖縄県宜野湾市真志喜4-4-1 宜野湾マリーナ",
        'hp' => "https://www.asoview.com/item/activity/pln3000019518/?sort=asoview&destinationType=region&destinationId=rgn12&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "アイランドブレイク沖縄",
        'address' => "〒904-0113沖縄県中頭郡北谷町字宮城1-541",
        'hp' => "https://www.asoview.com/item/activity/pln3000008149/?sort=asoview&destinationType=region&destinationId=rgn12&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ],

      [
        'name' => "島んちゅゲストハウス結縁",
        'address' => "〒901-0615沖縄県南城市玉城堀川570‐1",
        'hp' => "https://www.asoview.com/item/activity/pln3000013324/?sort=asoview&destinationType=region&destinationId=rgn12&leisureType=category&leisureId=12&adultQuantity=1&childQuantity=0"
      ]
    ]);

    }
}
