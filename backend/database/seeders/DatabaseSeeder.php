<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vid;
use Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * For convert the youtube url into thumbnail #onesparkbaby
     * https://www.get-youtube-thumbnail.com/#google_vignette
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::create([
            "username" => 'admin',
            "email" => 'administrator@email.com',
            "password" => "admin"
        ]);

        Vid::create(
            ['title'=>"roll", 'description'=>"lol do u play bedwars
join my discord- https://discord.gg/narpy" ,'date_uploaded'=>"2019-06-10T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=gGn6ahUYkmY", 'thumbnail'=>"https://img.youtube.com/vi/gGn6ahUYkmY/sddefault.jpg"]
        );
        
        Vid::create(
            ['title'=>"spin", 'description'=>"spinny boye
this video is created by me.

join my discord!- https://discord.gg/narpy

music used ► https://soundcloud.com/mitsukiyo_5/chocolate-lemon-free-download" ,'date_uploaded'=>"2019-04-18T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=oBloyiprdEM", 'thumbnail'=>"https://img.youtube.com/vi/oBloyiprdEM/maxresdefault.jpg"]
        );

        Vid::create(
            ['title'=>"Cat Bites Itself", 'description'=>"<no-description>" ,'date_uploaded'=>"2021-03-02T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=bTB9PZEc27c", 'thumbnail'=>"https://img.youtube.com/vi/bTB9PZEc27c/maxresdefault.jpg"]
        );

        Vid::create(
            ['title'=>"watchmen ligma meme: the movie", 'description'=>"Rorschach fell for the oldest trick in the book

Instagram: @luigi.kun" ,'date_uploaded'=>"2019-08-27T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=maAIWplFWUw", 'thumbnail'=>"https://img.youtube.com/vi/maAIWplFWUw/maxresdefault.jpg"]
        );

        Vid::create(
            ['title'=>"Cat Tries to Meow While Shaking Head - 1035268", 'description'=>"For licensing/usage please contact: licensing(at)jukinmedia.com" ,'date_uploaded'=>"2019-04-25T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=5qwYs6RbZs4", 'thumbnail'=>"https://img.youtube.com/vi/5qwYs6RbZs4/sddefault.jpg"]
        );

        Vid::create(
            ['title'=>"When you try to fight but your arms are too short", 'description'=>"Jukin Media Verified (Original) * For licensing / permission to use: Contact - licensing(at)jukinmediadotcom\n
Submit your videos here: http://bit.ly/2iFnUya" ,'date_uploaded'=>"2017-04-26T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=n_wgWLuFvwk", 'thumbnail'=>"https://img.youtube.com/vi/n_wgWLuFvwk/sddefault.jpg"]
        );

        Vid::create(
            ['title'=>"Rick Astley - Never Gonna Give You Up (Pianoforte) (Official Audio)", 'description'=>"The official audio for Never Gonna Give You Up (Pianoforte). 
From the new album The Best Of Me. Buy/Listen: https://RickAstley.lnk.to/BestID 
Limited edition formats available on Rick's store: https://RickAstley.lnk.to/storeID 

Tour dates: Tour http://www.rickastley.co.uk/ 

Follow Rick:
Facebook: https://www.facebook.com/RickAstley/
Twitter: https://twitter.com/rickastley
Instagram: https://www.instagram.com/officialric..." ,'date_uploaded'=>"2019-10-22T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=GHMjD0Lp5DY", 'thumbnail'=>"https://img.youtube.com/vi/GHMjD0Lp5DY/maxresdefault.jpg"]
        );

        Vid::create(
            ['title'=>"Rondo & Poss", 'description'=>"Stronk." ,'date_uploaded'=>"2021-02-24T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=lAH-LGyhg-A", 'thumbnail'=>"https://img.youtube.com/vi/lAH-LGyhg-A/maxresdefault.jpg"]
        );

        Vid::create(
            [
                'title'=>"Drive",
                'description'=>"Not cool man, not coooool.",
                'date_uploaded'=>"2024-05-05T16:00:00.000Z",
                'url'=>"https://www.youtube.com/watch?v=RzSDrL8-f20",
                'thumbnail'=>"https://img.youtube.com/vi/RzSDrL8-f20/maxresdefault.jpg"
            ]
        );

        Vid::create(
            ['title'=>"ORIGINAL VIDEO: Kitty sits on hedgehog!", 'description'=>"My 8 month old ragdoll learns quickly that hedgehogs are prickly!

Lucy is a 15 month old African pygmy hedgehog and my ragdoll is Lily.

And thanks to tastefullyoffensive.com for featuring this video! :)" ,'date_uploaded'=>"2013-09-27T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=zP5KaKrcQF4", 'thumbnail'=>"https://img.youtube.com/vi/zP5KaKrcQF4/maxresdefault.jpg"]
        );

        Vid::create(
            ['title'=>"Cat Feasts On Catnip As Owner Tries To Stop Them - 1169329", 'description'=>"To license this content click here and use “RM1” code at checkout
https://www.jukinmedia.com/licensing/..." ,'date_uploaded'=>"2021-01-12T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=P0OB9p0zqx0", 'thumbnail'=>"https://img.youtube.com/vi/P0OB9p0zqx0/sddefault.jpg"]
        );

        Vid::create(
            ['title'=>"How This Chair Conquered the World", 'description'=>"If you want to support documentaries like this make sure to subscribe!" ,'date_uploaded'=>"2020-04-28T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=JwApFGwMIMQ", 'thumbnail'=>"https://img.youtube.com/vi/JwApFGwMIMQ/maxresdefault.jpg"]
        );

        Vid::create(
            ['title'=>"Paul Rugg Relaxes By Petting His Dog, Lucky", 'description'=>"The original video. There. I said it." ,'date_uploaded'=>"2017-10-03T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=AdMgVkp4OXI", 'thumbnail'=>"https://img.youtube.com/vi/AdMgVkp4OXI/hqdefault.jpg"]  
        );

        Vid::create(
            ['title'=>"Take Him To Detroit", 'description'=>"Short clip from Kentucky Fried Movie, Fistful of Yen" ,'date_uploaded'=>"2013-05-26T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=ynY2begPzoM", 'thumbnail'=>"https://img.youtube.com/vi/ynY2begPzoM/sddefault.jpg"]
        );

        Vid::create(
            ['title'=>"Keanu Reeves Plays With Puppies While Answering Fan Questions", 'description'=>"Keanu Reeves (John Wick, The Matrix) gives us the scoop on his favorite sandwich, his new Toy Story 4 character, and what that picture of him riding a horse in Brooklyn was all about. " ,'date_uploaded'=>"2019-05-17T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=rOqUiXhECos", 'thumbnail'=>"https://img.youtube.com/vi/rOqUiXhECos/maxresdefault.jpg"]
        );

        Vid::create(
            ['title'=>"I Am Gabe Newell Full", 'description'=>"Bored, it's 12:41 AM, i'm tired, I can't sleep. THE END

All credit goes to Mega64" ,'date_uploaded'=>"2010-09-26T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=3IT2Cc_5WxE", 'thumbnail'=>"https://img.youtube.com/vi/3IT2Cc_5WxE/hqdefault.jpg"]
        );

        Vid::create(
            ['title'=>"もぺもぺ", 'description'=>"//!--- This movie is NOT for children. ---!//
" ,'date_uploaded'=>"2017-10-09T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=nC-bVtpIMd4", 'thumbnail'=>"https://img.youtube.com/vi/nC-bVtpIMd4/maxresdefault.jpg"]
        );

        Vid::create(
            ['title'=>"how is prangent formed", 'description'=>"A glimpse into the wonderful world of Yahoo! Answers. Song is Curley Shirley by Otto Sieben." ,'date_uploaded'=>"2016-10-21T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=EShUeudtaFg", 'thumbnail'=>"https://img.youtube.com/vi/EShUeudtaFg/hqdefault.jpg"]
        );

        Vid::create(
            ['title'=>"Dog of Wisdom", 'description'=>"Dogs. 

Cute. 

What are they good for? 

Absolutely petting" ,'date_uploaded'=>"2015-07-24T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=D-UmfqFjpl0", 'thumbnail'=>"https://img.youtube.com/vi/D-UmfqFjpl0/sddefault.jpg"]
        );

        Vid::create(
            [
                'title'=>"Dog of Wisdom II",
                'description'=>"Every dog has his day. Where there's a dog, there's a way.",
                'date_uploaded'=>"2023-04-01T16:00:00.000Z",
                'url'=>"https://www.youtube.com/watch?v=TnlakHr-O4w",
                'thumbnail'=>"https://img.youtube.com/vi/TnlakHr-O4w/maxresdefault.jpg"
            ]
        );

        Vid::create(
            [
                'title'=>"Dog of Wisdom III",
                'description'=>"To each, his own. To dog, the bone.",
                'date_uploaded'=>"2024-04-01T16:00:00.000Z",
                'url'=>"https://www.youtube.com/watch?v=JX1gUaRydFo",
                'thumbnail'=>"http://i3.ytimg.com/vi/JX1gUaRydFo/hqdefault.jpg"
            ] 
        );

        Vid::create(
            ['title'=>"god is dead OwO", 'description'=>"fwedwick nietzsche

music: rannar sillard - choir ambience" ,'date_uploaded'=>"2019-04-13T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=dGDH3meSPyk", 'thumbnail'=>"https://img.youtube.com/vi/dGDH3meSPyk/hqdefault.jpg"]
        );

        Vid::create(
            ['title'=>"What It Takes to Break a RAM with ESD (ft. Linus Tech Tips)", 'description'=>"Watch my Colab with Linus: https://youtu.be/nXkgbmr3dRA
We handle computer parts without ESD protection most of the times. But what does it take to break one with ESD through human body? Let’s check it out!" ,'date_uploaded'=>"2020-12-23T16:00:00.000Z", 'url'=> "https://www.youtube.com/watch?v=4SjOv_szzVM", 'thumbnail'=>"https://img.youtube.com/vi/4SjOv_szzVM/maxresdefault.jpg"]
        );

        //lol
        Artisan::call('passport:client --personal --no-interaction');
    }
}
