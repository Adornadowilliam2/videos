<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Vid;
use Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * For converting the YouTube URL into thumbnail #onesparkbaby
     * https://www.get-youtube-thumbnail.com/#google_vignette
     */
    public function run(): void
    {
        // Create the admin user
        User::create([
            'username' => 'admin',
            'email' => 'administrator@email.com',
            'password' => 'admin'
        ]);

        // Seed videos
        Vid::create([
            'title' => 'roll',
            'description' => 'lol do u play bedwars\njoin my discord- https://discord.gg/narpy',
            'date_uploaded' => '2019-06-10T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=gGn6ahUYkmY',
            'thumbnail' => 'https://img.youtube.com/vi/gGn6ahUYkmY/sddefault.jpg'
        ]);

        Vid::create([
            'title' => 'spin',
            'description' => 'spinny boye\nthis video is created by me.\n\njoin my discord!- https://discord.gg/narpy\n\nmusic used ► https://soundcloud.com/mitsukiyo_5/chocolate-lemon-free-download',
            'date_uploaded' => '2019-04-18T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=oBloyiprdEM',
            'thumbnail' => 'https://img.youtube.com/vi/oBloyiprdEM/maxresdefault.jpg'
        ]);

        Vid::create([
            'title' => 'Cat Bites Itself',
            'description' => '<no-description>',
            'date_uploaded' => '2021-03-02T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=bTB9PZEc27c',
            'thumbnail' => 'https://img.youtube.com/vi/bTB9PZEc27c/maxresdefault.jpg'
        ]);

        Vid::create([
            'title' => 'watchmen ligma meme: the movie',
            'description' => 'Rorschach fell for the oldest trick in the book\n\nInstagram: @luigi.kun',
            'date_uploaded' => '2019-08-27T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=maAIWplFWUw',
            'thumbnail' => 'https://img.youtube.com/vi/maAIWplFWUw/maxresdefault.jpg'
        ]);

        Vid::create([
            'title' => 'Cat Tries to Meow While Shaking Head - 1035268',
            'description' => 'For licensing/usage please contact: licensing(at)jukinmedia.com',
            'date_uploaded' => '2019-04-25T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=5qwYs6RbZs4',
            'thumbnail' => 'https://img.youtube.com/vi/5qwYs6RbZs4/sddefault.jpg'
        ]);

        Vid::create([
            'title' => 'When you try to fight but your arms are too short',
            'description' => 'Jukin Media Verified (Original) * For licensing / permission to use: Contact - licensing(at)jukinmediadotcom\nSubmit your videos here: http://bit.ly/2iFnUya',
            'date_uploaded' => '2017-04-26T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=n_wgWLuFvwk',
            'thumbnail' => 'https://img.youtube.com/vi/n_wgWLuFvwk/sddefault.jpg'
        ]);

        Vid::create([
            'title' => 'Rick Astley - Never Gonna Give You Up (Pianoforte) (Official Audio)',
            'description' => 'The official audio for Never Gonna Give You Up (Pianoforte).\nFrom the new album The Best Of Me. Buy/Listen: https://RickAstley.lnk.to/BestID\nLimited edition formats available on Rick\'s store: https://RickAstley.lnk.to/storeID\n\nTour dates: Tour http://www.rickastley.co.uk/\n\nFollow Rick:\nFacebook: https://www.facebook.com/RickAstley/\nTwitter: https://twitter.com/rickastley\nInstagram: https://www.instagram.com/officialric...',
            'date_uploaded' => '2019-10-22T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=GHMjD0Lp5DY',
            'thumbnail' => 'https://img.youtube.com/vi/GHMjD0Lp5DY/maxresdefault.jpg'
        ]);

        Vid::create([
            'title' => 'Rondo & Poss',
            'description' => 'Stronk.',
            'date_uploaded' => '2021-02-24T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=lAH-LGyhg-A',
            'thumbnail' => 'https://img.youtube.com/vi/lAH-LGyhg-A/maxresdefault.jpg'
        ]);

        Vid::create([
            'title' => 'Drive',
            'description' => 'Not cool man, not coooool.',
            'date_uploaded' => '2024-05-05T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=RzSDrL8-f20',
            'thumbnail' => 'https://img.youtube.com/vi/RzSDrL8-f20/maxresdefault.jpg'
        ]);

        Vid::create([
            'title' => 'ORIGINAL VIDEO: Kitty sits on hedgehog!',
            'description' => 'My 8 month old ragdoll learns quickly that hedgehogs are prickly!\nLucy is a 15 month old African pygmy hedgehog and my ragdoll is Lily.\n\nAnd thanks to tastefullyoffensive.com for featuring this video! :)',
            'date_uploaded' => '2013-09-27T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=zP5KaKrcQF4',
            'thumbnail' => 'https://img.youtube.com/vi/zP5KaKrcQF4/maxresdefault.jpg'
        ]);

        Vid::create([
            'title' => 'Cat Feasts On Catnip As Owner Tries To Stop Them - 1169329',
            'description' => 'To license this content click here and use “RM1” code at checkout\nhttps://www.jukinmedia.com/licensing/...',
            'date_uploaded' => '2021-01-12T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=P0OB9p0zqx0',
            'thumbnail' => 'https://img.youtube.com/vi/P0OB9p0zqx0/sddefault.jpg'
        ]);

        Vid::create([
            'title' => 'How This Chair Conquered the World',
            'description' => 'If you want to support documentaries like this make sure to subscribe!',
            'date_uploaded' => '2020-04-28T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=JwApFGwMIMQ',
            'thumbnail' => 'https://img.youtube.com/vi/JwApFGwMIMQ/maxresdefault.jpg'
        ]);

        Vid::create([
            'title' => 'Paul Rugg Relaxes By Petting His Dog, Lucky',
            'description' => 'The original video. There. I said it.',
            'date_uploaded' => '2017-10-03T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=AdMgVkp4OXI',
            'thumbnail' => 'https://img.youtube.com/vi/AdMgVkp4OXI/hqdefault.jpg'
        ]);

        Vid::create([
            'title' => 'Take Him To Detroit',
            'description' => 'Short clip from Kentucky Fried Movie, Fistful of Yen',
            'date_uploaded' => '2013-05-26T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=ynY2begPzoM',
            'thumbnail' => 'https://img.youtube.com/vi/ynY2begPzoM/sddefault.jpg'
        ]);

        Vid::create([
            'title' => 'Keanu Reeves Plays With Puppies While Answering Fan Questions',
            'description' => 'Keanu Reeves (John Wick, The Matrix) gives us the scoop on his favorite sandwich, his new Toy Story 4 character, and what that picture of him riding a horse in Brooklyn was all about.',
            'date_uploaded' => '2019-05-17T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=rOqUiXhECos',
            'thumbnail' => 'https://img.youtube.com/vi/rOqUiXhECos/maxresdefault.jpg'
        ]);

        Vid::create([
            'title' => 'I Am Gabe Newell Full',
            'description' => 'Bored, it\'s 12:41 AM, i\'m tired, I can\'t sleep. THE END\nAll credit goes to Mega64',
            'date_uploaded' => '2010-09-26T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=3IT2Cc_5WxE',
            'thumbnail' => 'https://img.youtube.com/vi/3IT2Cc_5WxE/hqdefault.jpg'
        ]);

        Vid::create([
            'title' => 'もぺもぺ',
            'description' => '//!--- This movie is NOT for children. ---!//',
            'date_uploaded' => '2017-10-09T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=nC-bVtpIMd4',
            'thumbnail' => 'https://img.youtube.com/vi/nC-bVtpIMd4/maxresdefault.jpg'
        ]);

        Vid::create([
            'title' => 'how is prangent formed',
            'description' => 'A glimpse into the wonderful world of Yahoo! Answers. Song is Curley Shirley by Otto Sieben.',
            'date_uploaded' => '2016-10-21T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=EShUeudtaFg',
            'thumbnail' => 'https://img.youtube.com/vi/EShUeudtaFg/hqdefault.jpg'
        ]);

        Vid::create([
            'title' => 'Dog of Wisdom',
            'description' => 'Dogs.\n\nCute.\n\nWhat are they good for?\n\nAbsolutely petting',
            'date_uploaded' => '2015-07-24T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=D-UmfqFjpl0',
            'thumbnail' => 'https://img.youtube.com/vi/D-UmfqFjpl0/sddefault.jpg'
        ]);

        Vid::create([
            'title' => 'Dog of Wisdom II',
            'description' => 'Every dog has his day. Where there\'s a dog, there\'s a way.',
            'date_uploaded' => '2023-04-01T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=TnlakHr-O4w',
            'thumbnail' => 'https://img.youtube.com/vi/TnlakHr-O4w/maxresdefault.jpg'
        ]);

        Vid::create([
            'title' => 'Dog of Wisdom III',
            'description' => 'To each, his own. To dog, the bone.',
            'date_uploaded' => '2024-04-01T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=JX1gUaRydFo',
            'thumbnail' => 'http://i3.ytimg.com/vi/JX1gUaRydFo/hqdefault.jpg'
        ]);

        Vid::create([
            'title' => 'god is dead OwO',
            'description' => 'fwedwick nietzsche\n\nmusic: rannar sillard - choir ambience',
            'date_uploaded' => '2019-04-13T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=dGDH3meSPyk',
            'thumbnail' => 'https://img.youtube.com/vi/dGDH3meSPyk/hqdefault.jpg'
        ]);

        Vid::create([
            'title' => 'What It Takes to Break a RAM with ESD (ft. Linus Tech Tips)',
            'description' => 'Watch my Colab with Linus: https://youtu.be/nXkgbmr3dRA\nWe handle computer parts without ESD protection most of the times. But what does it take to break one with ESD through human body? Let’s check it out!',
            'date_uploaded' => '2020-12-23T16:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=4SjOv_szzVM',
            'thumbnail' => 'https://img.youtube.com/vi/4SjOv_szzVM/maxresdefault.jpg'
        ]);

        Vid::create([
            'title' => 'nae nae nigga',
            'description' => 'a chinese singing a racist song',
            'date_uploaded' => '2024-11-10T00:00:00.000Z',
            'url' => 'https://youtu.be/NjD0H4eBfng?si=wI8Ip4p63sYb4zoO',
            'thumbnail' => 'https://i1.sndcdn.com/artworks-eKNPrylYyWeJz2x1-K3oIbQ-t1080x1080.jpg',
        ]);
        
        Vid::create([
            'title' => 'i like turtles',
            'description' => 'a boy wearing zombie makeup saying out random interview i like turtles',
            'date_uploaded' => '2023-05-01T00:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=CMNry4PE93Y',
            'thumbnail' => 'https://media.tenor.com/VZpX62Xxj1AAAAAM/i-like-turtles-weirdo.gif',
        ]);
        
        Vid::create([
            'title' => 'OIIA Cat',
            'description' => 'a cat singing sugar',
            'date_uploaded' => '2022-11-11T00:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=0QRFEL2aQNM',
            'thumbnail' => 'https://i.ytimg.com/vi/0QRFEL2aQNM/maxresdefault.jpg',
        ]);
        
        Vid::create([
            'title' => 'Mambo x counting star',
            'description' => 'mambo singing new song',
            'date_uploaded' => '2022-10-10T00:00:00.000Z',
            'url' => 'https://youtu.be/8aiwtsaGu8Q?si=sTTQQFDSenRbn98_',
            'thumbnail' => 'https://preview.redd.it/its-a-mambo-v0-3k660y4rpj7d1.png?auto=webp&s=882357caafe024aa8d5fb2bedaecf3fc40fd15d4',
        ]);
        
        Vid::create([
            'title' => 'Daler Mehndi Tunak Tunak Tun',
            'description' => 'a song of indian about the four element',
            'date_uploaded' => '2020-12-12T00:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=viMEhOWcxd0',
            'thumbnail' => 'https://i.ytimg.com/vi/viMEhOWcxd0/maxresdefault.jpg',
        ]);
        
        Vid::create([
            'title' => 'a train ost song',
            'description' => 'best song for a train that make own this song',
            'date_uploaded' => '2009-12-12T00:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=XeJU_bJTcvE',
            'thumbnail' => 'https://i.ytimg.com/vi/Tcd-rwe-SEw/maxresdefault.jpg',
        ]);
        
        Vid::create([
            'title' => 'what going on',
            'description' => 'HEYYEYAAEYAAAEYAEYAA',
            'date_uploaded' => '2005-10-05T00:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=ZZ5LpwO-An4',
            'thumbnail' => 'https://i.ytimg.com/vi/ZZ5LpwO-An4/hqdefault.jpg?sqp=-oaymwEmCOADEOgC8quKqQMa8AEB-AHeA4AC6AKKAgwIABABGH8gXigbMA8=&rs=AOn4CLBxOdApsQdTvg-YYAaJAi4w7k5GOg',
        ]);
        
        Vid::create([
            'title' => 'killing my love amv',
            'description' => 'takahashi ryosku vs shinigami',
            'date_uploaded' => '1995-12-12T00:00:00.000Z',
            'url' => 'https://www.youtube.com/watch?v=O5s3kX9Gk9g',
            'thumbnail' => 'https://i.ytimg.com/vi/E6d347FGIz4/maxresdefault.jpg',
        ]);

        // Run passport client command
        Artisan::call('passport:client --personal --no-interaction');
    }
}