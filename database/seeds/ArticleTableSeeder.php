<?php

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (config('project.demo')) {
            $item = new Article();
            $item->category_id = 1;
            $item->status = Article::FEATURED;
            $item->image = 'https://source.unsplash.com/collection/225/800x600';
            $item->name = 'Featured Post';
            $item->slug = 'featured-post';
            $item->reading_time = '1 Min Read';
            $item->summary = 'Are you busy this weekend? I have a new project with a tight deadline can you make it faster? or something summery; colourful, nor could you rotate the picture to show the other side of the room? nor can you put "find us on facebook" by the facebook logo? could you move it a tad to the left I need a website. How much will it cost. Needs to be sleeker I know somebody who can do this for a reasonable cost, so i\'ll know it when i see it. Mmm, exactly like that, but different can it be more retro i\'ll pay you in a week we don\'t need to pay upfront i hope you understand i\'ll pay you in a week we don\'t need to pay upfront i hope you understand. You can get my logo from facebook can you punch up the fun level on these icons but this looks perfect. Just Photoshop out the dog, add a baby, and make the curtains blue, or that sandwich needs to be more playful we are a non-profit organization, nor start on it today and we will talk about what i want next time . Could you do an actual logo instead ';
            $item->description = 'Featured Post';
            $item->save();
            for ($i = 1; $i <= 20; $i++) {
                $item = new Article();
                $item->category_id = 1;
                $item->status = Article::ACTIVE;
                $item->image = 'https://source.unsplash.com/collection/225/800x600';
                $item->name = 'Featured Post'.$i;
                $item->slug = 'featured-post'.$i;
                $item->reading_time = '1 Min Read';
                $item->summary = 'Thats not what i saw in my head at all make it sexy can you make it look like this clipart i found or concept is bang on, but can we look at a better execution. The website doesn\'t have the theme i was going for can you make the logo bigger yes bigger bigger still the logo is too big but that will be a conversation piece can my website be in english? there are more projects lined up charge extra the next time. This looks perfect. Just Photoshop out the dog, add a baby, and make the curtains blue can the black be darker yet im not sure, try something else, can you help me out? you will get a lot of free exposure doing this nor that will be a conversation piece thanks for taking the time to make the website, but i already made it in wix.';
                $item->description = 'Featured Post';
                $item->save();
            }
        }
    }
}
