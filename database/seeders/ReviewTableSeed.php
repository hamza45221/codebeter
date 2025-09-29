<?php

namespace Database\Seeders;

use App\Models\Reviews;
use Illuminate\Database\Seeder;

class ReviewTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $review = new Reviews();
        $review->name = 'Jacqueline Miller';
        $review->email = '';
        $review->description = 'Outstanding service and top-quality software solutions! The team was professional, responsive, and delivered exactly what we needed on time.';
        $review->title = '';
        $review->image = 'assets/images/client/huaman1.jpg';
        $review->video = '';
        $review->save();


        $review = new Reviews();
        $review->name = 'Louis Ferguson';
        $review->email = '';
        $review->description = 'Exceptional expertise and attention to detail. Our project was completed flawlessly, and communication was seamless throughout';
        $review->title = '';
        $review->image = 'assets/images/client/human2.jpg';
        $review->video = '';
        $review->save();


        $review = new Reviews();
        $review->name = 'Evelyn';
        $review->email = '';
        $review->description = 'Highly skilled and reliable agency. They exceeded expectations and delivered a fantastic software solution within the agreed timeframe.';
        $review->title = '';
        $review->image = 'assets/images/client/human6.jpg';
        $review->video = '';
        $review->save();


        $review = new Reviews();
        $review->name = 'Allen Smith';
        $review->email = '';
        $review->description = 'Great experience working with this company. They were responsive, professional, and delivered exactly what we needed for our software project';
        $review->title = '';
        $review->image = 'assets/images/client/human5.jpg';
        $review->video = '';
        $review->save();

        $review = new Reviews();
        $review->name = 'Emma Watson';
        $review->email = '';
        $review->description = 'Was out laughter raptures returned outweigh. Luckily cheered colonel I do we attack highest enabled. Tried law yet style child. The bore of true of no be deal.';
        $review->title = '';
        $review->image = 'assets/images/client/human7.jpg';
        $review->video = '';
        $review->save();


    }
}
