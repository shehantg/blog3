<?php

use Illuminate\Database\Seeder;

Use App\Blog;
Use App\Tag;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $tag = Tag::find(1);


        $new_blog1 = new Blog();
        $new_blog1->title = 'Programme: City of Child and Deep Griha Academy';
        $new_blog1->body = '<p>I first came to DGS as a young single person through the USPG Experience Exchange Programme in 1988. I had a truly wonderful time; Indian culture fascinated and enthralled me and the more I immersed myself in it the more I enjoyed it. The highlight of my trip was becoming part of the Deep Griha community and getting to know Neela and Baskar who were totally dedicated to their calling, but still found time to be so helpful, patient and kind to their volunteers. I went home thankful for all I had received from DGS and become a school teacher. I also promised to return to Pune one day…Twenty three years later I got the chance to return to India during the months of September and October 2011. Leaving home was so much harder this time as I missed my husband and children terribly but my experience was just as wonderful as before, although totally different. The first thing that struck me was how much Pune has changed, the population and size of the city had grown so much and the quiet place I remembered had become a sophisticated centre of commerce and industry. On the surface India had become a lot less Indian and now I knew what people mean when they complain that globalisation has made the whole world the same. Thankfully one thing hadn’t changed; DGS and its much needed mission to better the lives of the marginalised people from Pune’s poorest communities.During my stay I lived in the City of the Child and will always treasure the time I spent there. Using a mixture of my bad Marathi and the children’s English we spent time chatting together after school. I answered their questions about the UK and they shared their stories and hopes for the future with me. COC is a family that I felt very privileged to become part of for a short while.Ashlesha had asked me to help her in the DGS Academy and before I left home I spent a lot of time preparing lessons and collecting resources to make sure that I could be as helpful and productive as possible when I was in the school. The teachers were doing an excellent job already and I was able to work alongside them in order to make the planning and delivery of their lessons even better. It was a real joy to work alongside enthusiastic and interested teachers and with such lively and stimulating children. They may have learnt something from my visit, but I learnt a lot too!to come out later in 2012 as a volunteer. I’ll just have to visit her</p>';


        $new_blog1->user_id = 2;
        $new_blog1->video = 'https://www.youtube.com/embed/jEy9ygty4JQ';
        $new_blog1->slider_name ='first';
        $new_blog1->status      = 1;
        $new_blog1->featured    = 1;
        $new_blog1->subfeatured = 0;
        $new_blog1->save();
        $new_blog1->tags()->attach($tag);
        








        $new_blog2 = new Blog();
        $new_blog2->title = 'Programme: City of Child and Deep Griha Academy';
        $new_blog2->body = '<p>
I first came to DGS as a young single person through the USPG Experience Exchange Programme in 1988. I had a truly wonderful time; Indian culture fascinated and enthralled me and the more I immersed myself in it the more I enjoyed it. The highlight of my trip was becoming part of the Deep Griha community and getting to know Neela and Baskar who were totally dedicated to their calling, but still found time to be so helpful, patient and kind to their volunteers. I went home thankful for all I had received from DGS and become a school teacher. I also promised to return to Pune one day…
Twenty three years later I got the chance to return to India during the months of September and October 2011. Leaving home was so much harder this time as I missed my husband and children terribly but my experience was just as wonderful as before, although totally different. The first thing that struck me was how much Pune has changed, the population and size of the city had grown so much and the quiet place I remembered had become a sophisticated centre of commerce and industry. On the surface India had become a lot less Indian and now I knew what people mean when they complain that globalisation has made the whole world the same. Thankfully one thing hadn’t changed; DGS and its much needed mission to better the lives of the marginalised people from Pune’s poorest communities.

During my stay I lived in the City of the Child and will always treasure the time I spent there. Using a mixture of my bad Marathi and the children’s English we spent time chatting together after school. I answered their questions about the UK and they shared their stories and hopes for the future with me. COC is a family that I felt very privileged to become part of for a short while.

Ashlesha had asked me to help her in the DGS Academy and before I left home I spent a lot of time preparing lessons and collecting resources to make sure that I could be as helpful and productive as possible when I was in the school. The teachers were doing an excellent job already and I was able to work alongside them in order to make the planning and delivery of their lessons even better. It was a real joy to work alongside enthusiastic and interested teachers and with such lively and stimulating children. They may have learnt something from my visit, but I learnt a lot too!
Back home I seems that my passion for DGS must be catching! My daughter is hoping to come out later in 2012 as a volunteer. I’ll just have to visit her</p>';


        $new_blog2->user_id = 2;
        $new_blog2->video = 'https://www.youtube.com/embed/jEy9ygty4JQ';
        $new_blog2->slider_name ='first';
        $new_blog2->status      = 1;
        $new_blog2->featured    = 0;
        $new_blog2->subfeatured = 1;
        $new_blog2->save();
        $new_blog2->tags()->attach($tag);


        $new_blog3 = new Blog();
        $new_blog3->title = 'Programme: City of Child and Deep Griha Academy';
        $new_blog3->body = '<p>
I first came to DGS as a young single person through the USPG Experience Exchange Programme in 1988. I had a truly wonderful time; Indian culture fascinated and enthralled me and the more I immersed myself in it the more I enjoyed it. The highlight of my trip was becoming part of the Deep Griha community and getting to know Neela and Baskar who were totally dedicated to their calling, but still found time to be so helpful, patient and kind to their volunteers. I went home thankful for all I had received from DGS and become a school teacher. I also promised to return to Pune one day…
Twenty three years later I got the chance to return to India during the months of September and October 2011. Leaving home was so much harder this time as I missed my husband and children terribly but my experience was just as wonderful as before, although totally different. The first thing that struck me was how much Pune has changed, the population and size of the city had grown so much and the quiet place I remembered had become a sophisticated centre of commerce and industry. On the surface India had become a lot less Indian and now I knew what people mean when they complain that globalisation has made the whole world the same. Thankfully one thing hadn’t changed; DGS and its much needed mission to better the lives of the marginalised people from Pune’s poorest communities.

During my stay I lived in the City of the Child and will always treasure the time I spent there. Using a mixture of my bad Marathi and the children’s English we spent time chatting together after school. I answered their questions about the UK and they shared their stories and hopes for the future with me. COC is a family that I felt very privileged to become part of for a short while.

Ashlesha had asked me to help her in the DGS Academy and before I left home I spent a lot of time preparing lessons and collecting resources to make sure that I could be as helpful and productive as possible when I was in the school. The teachers were doing an excellent job already and I was able to work alongside them in order to make the planning and delivery of their lessons even better. It was a real joy to work alongside enthusiastic and interested teachers and with such lively and stimulating children. They may have learnt something from my visit, but I learnt a lot too!
Back home I seems that my passion for DGS must be catching! My daughter is hoping to come out later in 2012 as a volunteer. I’ll just have to visit her</p>';


        $new_blog3->user_id = 2;
        $new_blog3->video = 'https://www.youtube.com/embed/jEy9ygty4JQ';
        $new_blog3->slider_name ='first';
        $new_blog3->status      = 1;
        $new_blog3->featured    = 0;
        $new_blog3->subfeatured = 1;
        $new_blog3->save();
        $new_blog3->tags()->attach($tag);

        $new_blog4 = new Blog();
        $new_blog4->title = 'Programme: City of Child and Deep Griha Academy';
        $new_blog4->body = '<p>
I first came to DGS as a young single person through the USPG Experience Exchange Programme in 1988. I had a truly wonderful time; Indian culture fascinated and enthralled me and the more I immersed myself in it the more I enjoyed it. The highlight of my trip was becoming part of the Deep Griha community and getting to know Neela and Baskar who were totally dedicated to their calling, but still found time to be so helpful, patient and kind to their volunteers. I went home thankful for all I had received from DGS and become a school teacher. I also promised to return to Pune one day…
Twenty three years later I got the chance to return to India during the months of September and October 2011. Leaving home was so much harder this time as I missed my husband and children terribly but my experience was just as wonderful as before, although totally different. The first thing that struck me was how much Pune has changed, the population and size of the city had grown so much and the quiet place I remembered had become a sophisticated centre of commerce and industry. On the surface India had become a lot less Indian and now I knew what people mean when they complain that globalisation has made the whole world the same. Thankfully one thing hadn’t changed; DGS and its much needed mission to better the lives of the marginalised people from Pune’s poorest communities.

During my stay I lived in the City of the Child and will always treasure the time I spent there. Using a mixture of my bad Marathi and the children’s English we spent time chatting together after school. I answered their questions about the UK and they shared their stories and hopes for the future with me. COC is a family that I felt very privileged to become part of for a short while.

Ashlesha had asked me to help her in the DGS Academy and before I left home I spent a lot of time preparing lessons and collecting resources to make sure that I could be as helpful and productive as possible when I was in the school. The teachers were doing an excellent job already and I was able to work alongside them in order to make the planning and delivery of their lessons even better. It was a real joy to work alongside enthusiastic and interested teachers and with such lively and stimulating children. They may have learnt something from my visit, but I learnt a lot too!
Back home I seems that my passion for DGS must be catching! My daughter is hoping to come out later in 2012 as a volunteer. I’ll just have to visit her</p>';


        $new_blog4->user_id = 2;
        $new_blog4->video = 'https://www.youtube.com/embed/jEy9ygty4JQ';
        $new_blog4->slider_name ='first';
        $new_blog4->status      = 1;
        $new_blog4->featured    = 0;
        $new_blog4->subfeatured = 1;
        $new_blog4->save();
        $new_blog4->tags()->attach($tag);

        $new_blog5 = new Blog();
        $new_blog5->title = 'Programme: City of Child and Deep Griha Academy';
        $new_blog5->body = '<p>
I first came to DGS as a young single person through the USPG Experience Exchange Programme in 1988. I had a truly wonderful time; Indian culture fascinated and enthralled me and the more I immersed myself in it the more I enjoyed it. The highlight of my trip was becoming part of the Deep Griha community and getting to know Neela and Baskar who were totally dedicated to their calling, but still found time to be so helpful, patient and kind to their volunteers. I went home thankful for all I had received from DGS and become a school teacher. I also promised to return to Pune one day…
Twenty three years later I got the chance to return to India during the months of September and October 2011. Leaving home was so much harder this time as I missed my husband and children terribly but my experience was just as wonderful as before, although totally different. The first thing that struck me was how much Pune has changed, the population and size of the city had grown so much and the quiet place I remembered had become a sophisticated centre of commerce and industry. On the surface India had become a lot less Indian and now I knew what people mean when they complain that globalisation has made the whole world the same. Thankfully one thing hadn’t changed; DGS and its much needed mission to better the lives of the marginalised people from Pune’s poorest communities.

During my stay I lived in the City of the Child and will always treasure the time I spent there. Using a mixture of my bad Marathi and the children’s English we spent time chatting together after school. I answered their questions about the UK and they shared their stories and hopes for the future with me. COC is a family that I felt very privileged to become part of for a short while.

Ashlesha had asked me to help her in the DGS Academy and before I left home I spent a lot of time preparing lessons and collecting resources to make sure that I could be as helpful and productive as possible when I was in the school. The teachers were doing an excellent job already and I was able to work alongside them in order to make the planning and delivery of their lessons even better. It was a real joy to work alongside enthusiastic and interested teachers and with such lively and stimulating children. They may have learnt something from my visit, but I learnt a lot too!
Back home I seems that my passion for DGS must be catching! My daughter is hoping to come out later in 2012 as a volunteer. I’ll just have to visit her</p>';


        $new_blog5->user_id = 2;
        $new_blog5->video = 'https://www.youtube.com/embed/jEy9ygty4JQ';
        $new_blog5->slider_name ='first';
        $new_blog5->status      = 1;
        $new_blog5->featured    = 0;
        $new_blog5->subfeatured = 1;
        $new_blog5->save();
        $new_blog5->tags()->attach($tag);

        $new_blog6 = new Blog();
        $new_blog6->title = 'Programme: City of Child and Deep Griha Academy';
        $new_blog6->body = '<p>
I first came to DGS as a young single person through the USPG Experience Exchange Programme in 1988. I had a truly wonderful time; Indian culture fascinated and enthralled me and the more I immersed myself in it the more I enjoyed it. The highlight of my trip was becoming part of the Deep Griha community and getting to know Neela and Baskar who were totally dedicated to their calling, but still found time to be so helpful, patient and kind to their volunteers. I went home thankful for all I had received from DGS and become a school teacher. I also promised to return to Pune one day…
Twenty three years later I got the chance to return to India during the months of September and October 2011. Leaving home was so much harder this time as I missed my husband and children terribly but my experience was just as wonderful as before, although totally different. The first thing that struck me was how much Pune has changed, the population and size of the city had grown so much and the quiet place I remembered had become a sophisticated centre of commerce and industry. On the surface India had become a lot less Indian and now I knew what people mean when they complain that globalisation has made the whole world the same. Thankfully one thing hadn’t changed; DGS and its much needed mission to better the lives of the marginalised people from Pune’s poorest communities.

During my stay I lived in the City of the Child and will always treasure the time I spent there. Using a mixture of my bad Marathi and the children’s English we spent time chatting together after school. I answered their questions about the UK and they shared their stories and hopes for the future with me. COC is a family that I felt very privileged to become part of for a short while.

Ashlesha had asked me to help her in the DGS Academy and before I left home I spent a lot of time preparing lessons and collecting resources to make sure that I could be as helpful and productive as possible when I was in the school. The teachers were doing an excellent job already and I was able to work alongside them in order to make the planning and delivery of their lessons even better. It was a real joy to work alongside enthusiastic and interested teachers and with such lively and stimulating children. They may have learnt something from my visit, but I learnt a lot too!
Back home I seems that my passion for DGS must be catching! My daughter is hoping to come out later in 2012 as a volunteer. I’ll just have to visit her</p>';


        $new_blog6->user_id = 2;
        $new_blog6->video = 'https://www.youtube.com/embed/jEy9ygty4JQ';
        $new_blog6->slider_name ='first';
        $new_blog6->status      = 1;
        $new_blog6->featured    = 0;
        $new_blog6->subfeatured = 0;
        $new_blog6->save();
        $new_blog6->tags()->attach($tag);


        $new_blog7 = new Blog();
        $new_blog7->title = 'Programme: City of Child and Deep Griha Academy';
        $new_blog7->body = '<p>
I first came to DGS as a young single person through the USPG Experience Exchange Programme in 1988. I had a truly wonderful time; Indian culture fascinated and enthralled me and the more I immersed myself in it the more I enjoyed it. The highlight of my trip was becoming part of the Deep Griha community and getting to know Neela and Baskar who were totally dedicated to their calling, but still found time to be so helpful, patient and kind to their volunteers. I went home thankful for all I had received from DGS and become a school teacher. I also promised to return to Pune one day…
Twenty three years later I got the chance to return to India during the months of September and October 2011. Leaving home was so much harder this time as I missed my husband and children terribly but my experience was just as wonderful as before, although totally different. The first thing that struck me was how much Pune has changed, the population and size of the city had grown so much and the quiet place I remembered had become a sophisticated centre of commerce and industry. On the surface India had become a lot less Indian and now I knew what people mean when they complain that globalisation has made the whole world the same. Thankfully one thing hadn’t changed; DGS and its much needed mission to better the lives of the marginalised people from Pune’s poorest communities.

During my stay I lived in the City of the Child and will always treasure the time I spent there. Using a mixture of my bad Marathi and the children’s English we spent time chatting together after school. I answered their questions about the UK and they shared their stories and hopes for the future with me. COC is a family that I felt very privileged to become part of for a short while.

Ashlesha had asked me to help her in the DGS Academy and before I left home I spent a lot of time preparing lessons and collecting resources to make sure that I could be as helpful and productive as possible when I was in the school. The teachers were doing an excellent job already and I was able to work alongside them in order to make the planning and delivery of their lessons even better. It was a real joy to work alongside enthusiastic and interested teachers and with such lively and stimulating children. They may have learnt something from my visit, but I learnt a lot too!
Back home I seems that my passion for DGS must be catching! My daughter is hoping to come out later in 2012 as a volunteer. I’ll just have to visit her</p>';


        $new_blog7->user_id = 2;
        $new_blog7->video = 'https://www.youtube.com/embed/jEy9ygty4JQ';
        $new_blog7->slider_name ='first';
        $new_blog7->status      = 1;
        $new_blog7->featured    = 0;
        $new_blog7->subfeatured = 0;
        $new_blog7->save();
        $new_blog7->tags()->attach($tag);



        $new_blog8 = new Blog();
        $new_blog8->title = 'Programme: City of Child and Deep Griha Academy';
        $new_blog8->body = '<p>
I first came to DGS as a young single person through the USPG Experience Exchange Programme in 1988. I had a truly wonderful time; Indian culture fascinated and enthralled me and the more I immersed myself in it the more I enjoyed it. The highlight of my trip was becoming part of the Deep Griha community and getting to know Neela and Baskar who were totally dedicated to their calling, but still found time to be so helpful, patient and kind to their volunteers. I went home thankful for all I had received from DGS and become a school teacher. I also promised to return to Pune one day…
Twenty three years later I got the chance to return to India during the months of September and October 2011. Leaving home was so much harder this time as I missed my husband and children terribly but my experience was just as wonderful as before, although totally different. The first thing that struck me was how much Pune has changed, the population and size of the city had grown so much and the quiet place I remembered had become a sophisticated centre of commerce and industry. On the surface India had become a lot less Indian and now I knew what people mean when they complain that globalisation has made the whole world the same. Thankfully one thing hadn’t changed; DGS and its much needed mission to better the lives of the marginalised people from Pune’s poorest communities.

During my stay I lived in the City of the Child and will always treasure the time I spent there. Using a mixture of my bad Marathi and the children’s English we spent time chatting together after school. I answered their questions about the UK and they shared their stories and hopes for the future with me. COC is a family that I felt very privileged to become part of for a short while.

Ashlesha had asked me to help her in the DGS Academy and before I left home I spent a lot of time preparing lessons and collecting resources to make sure that I could be as helpful and productive as possible when I was in the school. The teachers were doing an excellent job already and I was able to work alongside them in order to make the planning and delivery of their lessons even better. It was a real joy to work alongside enthusiastic and interested teachers and with such lively and stimulating children. They may have learnt something from my visit, but I learnt a lot too!
Back home I seems that my passion for DGS must be catching! My daughter is hoping to come out later in 2012 as a volunteer. I’ll just have to visit her</p>';


        $new_blog8->user_id = 2;
        $new_blog8->video = 'https://www.youtube.com/embed/jEy9ygty4JQ';
        $new_blog8->slider_name ='first';
        $new_blog8->status      = 1;
        $new_blog8->featured    = 0;
        $new_blog8->subfeatured = 0;
        $new_blog8->save();
        $new_blog8->tags()->attach($tag);




        $new_blog9 = new Blog();
        $new_blog9->title = 'Programme: City of Child and Deep Griha Academy';
        $new_blog9->body = '<p>
I first came to DGS as a young single person through the USPG Experience Exchange Programme in 1988. I had a truly wonderful time; Indian culture fascinated and enthralled me and the more I immersed myself in it the more I enjoyed it. The highlight of my trip was becoming part of the Deep Griha community and getting to know Neela and Baskar who were totally dedicated to their calling, but still found time to be so helpful, patient and kind to their volunteers. I went home thankful for all I had received from DGS and become a school teacher. I also promised to return to Pune one day…
Twenty three years later I got the chance to return to India during the months of September and October 2011. Leaving home was so much harder this time as I missed my husband and children terribly but my experience was just as wonderful as before, although totally different. The first thing that struck me was how much Pune has changed, the population and size of the city had grown so much and the quiet place I remembered had become a sophisticated centre of commerce and industry. On the surface India had become a lot less Indian and now I knew what people mean when they complain that globalisation has made the whole world the same. Thankfully one thing hadn’t changed; DGS and its much needed mission to better the lives of the marginalised people from Pune’s poorest communities.

During my stay I lived in the City of the Child and will always treasure the time I spent there. Using a mixture of my bad Marathi and the children’s English we spent time chatting together after school. I answered their questions about the UK and they shared their stories and hopes for the future with me. COC is a family that I felt very privileged to become part of for a short while.

Ashlesha had asked me to help her in the DGS Academy and before I left home I spent a lot of time preparing lessons and collecting resources to make sure that I could be as helpful and productive as possible when I was in the school. The teachers were doing an excellent job already and I was able to work alongside them in order to make the planning and delivery of their lessons even better. It was a real joy to work alongside enthusiastic and interested teachers and with such lively and stimulating children. They may have learnt something from my visit, but I learnt a lot too!
Back home I seems that my passion for DGS must be catching! My daughter is hoping to come out later in 2012 as a volunteer. I’ll just have to visit her</p>';


        $new_blog9->user_id = 2;
        $new_blog9->video = 'https://www.youtube.com/embed/jEy9ygty4JQ';
        $new_blog9->slider_name ='first';
        $new_blog9->status      = 1;
        $new_blog9->featured    = 0;
        $new_blog9->subfeatured = 0;
        $new_blog9->save();
        $new_blog9->tags()->attach($tag);






        $new_blog10 = new Blog();
        $new_blog10->title = 'Programme: City of Child and Deep Griha Academy';
        $new_blog10->body = '<p>
I first came to DGS as a young single person through the USPG Experience Exchange Programme in 1988. I had a truly wonderful time; Indian culture fascinated and enthralled me and the more I immersed myself in it the more I enjoyed it. The highlight of my trip was becoming part of the Deep Griha community and getting to know Neela and Baskar who were totally dedicated to their calling, but still found time to be so helpful, patient and kind to their volunteers. I went home thankful for all I had received from DGS and become a school teacher. I also promised to return to Pune one day…
Twenty three years later I got the chance to return to India during the months of September and October 2011. Leaving home was so much harder this time as I missed my husband and children terribly but my experience was just as wonderful as before, although totally different. The first thing that struck me was how much Pune has changed, the population and size of the city had grown so much and the quiet place I remembered had become a sophisticated centre of commerce and industry. On the surface India had become a lot less Indian and now I knew what people mean when they complain that globalisation has made the whole world the same. Thankfully one thing hadn’t changed; DGS and its much needed mission to better the lives of the marginalised people from Pune’s poorest communities.

During my stay I lived in the City of the Child and will always treasure the time I spent there. Using a mixture of my bad Marathi and the children’s English we spent time chatting together after school. I answered their questions about the UK and they shared their stories and hopes for the future with me. COC is a family that I felt very privileged to become part of for a short while.

Ashlesha had asked me to help her in the DGS Academy and before I left home I spent a lot of time preparing lessons and collecting resources to make sure that I could be as helpful and productive as possible when I was in the school. The teachers were doing an excellent job already and I was able to work alongside them in order to make the planning and delivery of their lessons even better. It was a real joy to work alongside enthusiastic and interested teachers and with such lively and stimulating children. They may have learnt something from my visit, but I learnt a lot too!
Back home I seems that my passion for DGS must be catching! My daughter is hoping to come out later in 2012 as a volunteer. I’ll just have to visit her</p>';


        $new_blog10->user_id = 2;
        $new_blog10->video = 'https://www.youtube.com/embed/jEy9ygty4JQ';
        $new_blog10->slider_name ='first';
        $new_blog10->status      = 1;
        $new_blog10->featured    = 0;
        $new_blog10->subfeatured = 0;
        $new_blog10->save();
        $new_blog10->tags()->attach($tag);
    }
}
