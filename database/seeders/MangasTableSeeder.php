<?php

namespace Database\Seeders;

use App\Models\Manga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MangasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mangas = [
            [
                'title' => 'Doraemon',
                'author' => 'Fujiko F. Fujio',
                'year_of_publication' => 1969,
                'description' => 'Doraemon, un gatto robot venuto dal futuro, viene inviato indietro nel tempo per aiutare Nobita Nobi, un ragazzino pigro e sfortunato, a migliorare la sua vita. Grazie ai suoi gadget futuristici contenuti in una tasca dimensionale, Doraemon affronta insieme a Nobita le sfide quotidiane e cerca di correggere le sue abitudini autodistruttive.',
            ],
            [
                'title' => 'Banana Fish',
                'author' => 'Akimi Yoshida',
                'year_of_publication' => 1985,
                'description' => 'Ash Lynx, un carismatico leader di gang a New York, scopre un misterioso nome in punto di morte da un soldato impazzito: "Banana Fish". Mentre cerca di scoprire la verità dietro questo nome, si trova coinvolto in una rete di cospirazioni militari e traffico di droga. Al suo fianco, Eiji Okumura, un fotografo giapponese che diventa il suo alleato e unica ancora di salvezza.',
            ],
            [
                'title' => 'One Piece',
                'author' => 'Eiichiro Oda',
                'year_of_publication' => 1997,
                'description' => 'Monkey D. Luffy, un giovane pirata con un corpo di gomma grazie a un frutto magico, parte per un viaggio alla ricerca del mitico tesoro "One Piece" per diventare il Re dei Pirati. Lungo il suo cammino, recluta una ciurma di personaggi unici e affronta potenti nemici, governi corrotti e creature leggendarie nei mari del mondo di Grand Line.',
            ],
            [
                'title' => 'Dragon Ball',
                'author' => 'Akira Toriyama',
                'year_of_publication' => 1984,
                'description' => 'Son Goku, un bambino dotato di una forza straordinaria e di una coda da scimmia, parte per un viaggio epico alla ricerca delle sette Sfere del Drago, che una volta riunite possono evocare un drago in grado di esaudire qualsiasi desiderio. La serie evolve da una commedia d’avventura a un’epica battaglia tra potenti guerrieri, alieni e divinità.',
            ],
            [
                'title' => 'Urusei Yatsura',
                'author' => 'Rumiko Takahashi',
                'year_of_publication' => 1978,
                'description' => 'Ataru Moroboshi, un liceale sfortunato e donnaiolo, viene scelto per rappresentare l’umanità in una sfida contro una razza aliena. Vince per caso, ma la principessa aliena Lum si innamora di lui e si trasferisce a casa sua, causando una serie infinita di disastri comici con alieni, yokai e situazioni assurde.',
            ],
            [
                'title' => 'D.Gray-man',
                'author' => 'Katsura Hoshino',
                'year_of_publication' => 2004,
                'description' => 'In un mondo dove il Conte del Millennio crea mostri chiamati Akuma utilizzando le anime dei morti, Allen Walker, un esorcista con un potere speciale nell’occhio sinistro e nel braccio, si unisce alla Congregazione dell’Ombra per combattere il male. Il suo viaggio svela segreti oscuri sulla vera natura degli Akuma e del proprio destino.',
            ],
            [
                'title' => 'Naruto',
                'author' => 'Masashi Kishimoto',
                'year_of_publication' => 1999,
                'description' => 'Naruto Uzumaki è un ninja emarginato del Villaggio della Foglia con un demone sigillato dentro di sé. Sogna di diventare Hokage per farsi accettare. Durante il suo percorso affronta guerre, antichi nemici e scelte morali complesse, mentre forma legami indissolubili con i suoi amici e rivali come Sasuke e Sakura.',
            ],
            [
                'title' => 'Bleach',
                'author' => 'Tite Kubo',
                'year_of_publication' => 2001,
                'description' => 'Ichigo Kurosaki, un adolescente capace di vedere i fantasmi, eredita i poteri di un dio della morte (Shinigami) e si trova coinvolto nella protezione delle anime umane e nella lotta contro pericolosi spiriti corrotti chiamati Hollow. Le sue battaglie lo porteranno nel mondo spirituale della Soul Society e oltre.',
            ],
            [
                'title' => 'Attack on Titan',
                'author' => 'Hajime Isayama',
                'year_of_publication' => 2009,
                'description' => 'In un mondo devastato da gigantesche creature umanoidi chiamate Titani, l’umanità si rifugia dentro enormi mura per sopravvivere. Eren Yeager, dopo aver visto la propria madre uccisa da un Titano, giura vendetta e si arruola nell’esercito. La sua lotta lo porterà a scoprire oscuri segreti sull’origine dei Titani e sulla storia del mondo.',
            ],
            [
                'title' => 'Death Note',
                'author' => 'Tsugumi Ohba',
                'year_of_publication' => 2003,
                'description' => 'Light Yagami, uno studente modello, trova un quaderno soprannaturale chiamato "Death Note" che uccide chiunque vi venga scritto. Inizia a usarlo per eliminare i criminali e creare un nuovo mondo, attirando l’attenzione del misterioso detective "L", dando inizio a un’intensa battaglia psicologica.',
            ],
            [
                'title' => 'Fullmetal Alchemist',
                'author' => 'Hiromu Arakawa',
                'year_of_publication' => 2001,
                'description' => 'I fratelli Edward e Alphonse Elric cercano la Pietra Filosofale per recuperare i loro corpi persi dopo un tentativo fallito di riportare in vita la madre con l’alchimia. La loro ricerca li porta a scontrarsi con esseri sovrannaturali e verità spaventose sul potere, il sacrificio e la redenzione.',
            ],
            [
                'title' => 'Tokyo Ghoul',
                'author' => 'Sui Ishida',
                'year_of_publication' => 2011,
                'description' => 'Ken Kaneki diventa mezzo-ghoul dopo un trapianto d’emergenza e deve sopravvivere in una società divisa tra umani e ghoul che si nutrono di carne umana. Mentre lotta con la sua nuova natura, scopre una rete di violenza, oppressione e una fragile tregua tra le due specie.',
            ],
            [
                'title' => 'My Hero Academia',
                'author' => 'Kōhei Horikoshi',
                'year_of_publication' => 2014,
                'description' => 'Izuku Midoriya nasce senza poteri in un mondo dove il 90% delle persone ne possiede. Dopo un incontro con il più grande eroe, All Might, eredita il suo potere "One For All" e inizia il suo percorso per diventare un vero eroe, affrontando villain letali e scelte morali pesanti.',
            ],
            [
                'title' => 'Hunter × Hunter',
                'author' => 'Yoshihiro Togashi',
                'year_of_publication' => 1998,
                'description' => 'Gon Freecss scopre che suo padre, che credeva morto, è in realtà un famoso Hunter. Parte per diventare anche lui un Hunter, incontrando amici e rivali in un mondo pieno di pericoli, creature strane e battaglie mentali che sfidano l’umanità e l’etica.',
            ],
            [
                'title' => 'Black Clover',
                'author' => 'Yūki Tabata',
                'year_of_publication' => 2015,
                'description' => 'Asta nasce senza magia in un mondo dove essa è tutto. Nonostante questo, riceve un misterioso grimorio nero che gli consente di annullare ogni tipo di magia. Insieme all’amico-rivale Yuno, si impegna per diventare il prossimo Re Mago e salvare il regno dalle minacce oscure.',
            ],
            [
                'title' => 'Demon Slayer',
                'author' => 'Koyoharu Gotōge',
                'year_of_publication' => 2016,
                'description' => 'Tanjiro Kamado scopre che la sua famiglia è stata massacrata dai demoni e che la sorella Nezuko è stata trasformata. Decide di diventare un ammazzademoni per trovare una cura per lei e vendicarsi, affrontando una società segreta e demoni incredibilmente potenti.',
            ],
            [
                'title' => 'Fairy Tail',
                'author' => 'Hiro Mashima',
                'year_of_publication' => 2006,
                'description' => 'In un mondo di magia, il mago del fuoco Natsu Dragneel e la sua amica Lucy Heartfilia viaggiano come membri della gilda Fairy Tail, affrontando creature leggendarie, gilde oscure e nemici con poteri devastanti, il tutto legato da una forte amicizia.',
            ],
            [
                'title' => 'JoJo\'s Bizarre Adventure',
                'author' => 'Hirohiko Araki',
                'year_of_publication' => 1987,
                'description' => 'Una saga epica che segue diverse generazioni della famiglia Joestar, ciascuna impegnata a combattere forze del male con abilità sovrannaturali chiamate "Stand". Ogni parte esplora un’epoca, uno stile e un protagonista unico, rendendo la serie imprevedibile e visionaria.',
            ],
            [
                'title' => 'Slam Dunk',
                'author' => 'Takehiko Inoue',
                'year_of_publication' => 1990,
                'description' => 'Hanamichi Sakuragi, inizialmente interessato al basket solo per impressionare una ragazza, scopre una vera passione per lo sport. Attraverso allenamenti duri e partite intense, cresce come atleta e come persona, diventando parte fondamentale della squadra del liceo Shohoku.',
            ],
            [
                'title' => 'Vagabond',
                'author' => 'Takehiko Inoue',
                'year_of_publication' => 1998,
                'description' => 'Una rivisitazione realistica e profonda della vita di Miyamoto Musashi, il leggendario spadaccino giapponese. Dopo la guerra di Sekigahara, Musashi intraprende un viaggio di perfezionamento spirituale e marziale alla ricerca della vera via della spada.',
            ],
        ];


        foreach ($mangas as $manga) {
            $newManga = new Manga();

            $newManga->title = $manga['title'];
            $newManga->author = $manga['author'];
            $newManga->year_of_publication = $manga['year_of_publication'];
            $newManga->description = $manga['description'];

            $newManga->save();
        }
    }
}
