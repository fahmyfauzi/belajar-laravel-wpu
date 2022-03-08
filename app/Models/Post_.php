<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fahmy Fauzi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolor numquam nisi ullam officiis deserunt asperiores rerum eius aliquam consequatur error corporis sed optio, et quia quibusdam doloribus soluta, itaque laborum minima inventore voluptates odit iste? Fugiat quia, magnam, debitis, eveniet sequi corrupti consequatur assumenda fuga velit perferendis error modi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Futra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. In sunt beatae assumenda, consequuntur culpa autem odit sed maxime temporibus sapiente dignissimos maiores quibusdam voluptatem obcaecati id veniam quisquam unde eaque inventore numquam suscipit. Possimus eum exercitationem non autem accusantium, dignissimos ut obcaecati facere, explicabo in aperiam eos sit aspernatur laudantium impedit? Saepe autem ipsa quo eligendi voluptatibus maiores sequi iure corporis dolores numquam odit iusto, ab accusamus nam tenetur, nesciunt incidunt? Optio ducimus reiciendis fugiat nemo aspernatur corporis! Eveniet, dolor."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {

        //     if ($p['slug'] === $slug) {

        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}

// tinker

// Post::create([
//     'title' => 'Judul Post Liverpool',
//     'category_id' =>3,
//     'user_id' => 1,
//     'slug' => 'judul-post-liverpool',
//     'excerpt' =>" Liverpool menang Piala Liga dengan gaya dramatik apabila penjaga gol Chelsea, Kepa Arrizabalaga, gagal menyempurnakan penalti",
//     'body' => '<p>Kepa dimasukkan selepas tamat masa tambahan bagi menggantikan Edouard Mendy berikutan reputasinya sebagai pakar penyelamat penalti, namun penjaga gol asal Sepanyol itu gagal menyelamatkan kesemua percubaan Liverpool.Sebelum ini, Kepa mencetuskan kontroversi dalam final Piala Liga 2019 apabila beliau enggan dikeluarkan sebelum tewas kepada Manchester City.Bos Chelsea, Thomas Tuchel, mungkin tertanya-tanya sama ada beliau sepatutnya mengekalkan Mendy dalam babak penentuan penalti selepas beraksi cemerlang sepanjang perlawanan tetapi Kepa juga telah membuktikan keupayaannya melalui sepakan penalti pada masa lalu. <p> <p>Tiada aduan mengenai kualiti dan usaha dalam prestasi Chelsea selain kegagalan untuk mengambil peluang mereka.Dengan kejayaan ini, Liverpool menjulang Piala Liga buat rekod sembilan kali dengan Klopp menjadi pengendali dari Jerman pertama menang kejohanan itu selepas tewas dua kali sebagai bos di kelab Anfield itu."Ada sedikit ruang untuk berasa sentimental. Caoimhin Kelleher ialah pemain muda, bermain dalam semua kejohanan. Saya tidak boleh beritahunya beliau tidak boleh bermain di final."Saya ialah pengurus dan juga seorang manusia. Beliau berhak atas kemenangan ini."Saya gembira buat semua orang yang berada dalam keadaan yang susah untuk meraikan sesuatu seperti ini. Chelsea amat kuat, kami juga menunjukkan permainan yang baik... nasib menyebelahi kami kali ini," kata Klopp. - Agensi berita.</p>'
// ])

// // Category::create([
// //     'name' => 'Web Programming',
// //     'slug' =>'web-programming'
// // ])