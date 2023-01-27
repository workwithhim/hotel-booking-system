<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'Standard Room',
            'Superior Room',
            'Deluxe Room',
            'Junior Suite Room',
            'Suite Room',
            'Presidential Suite',
            'Single Room',
            'Twin Room',
            'Double Room',
            'Family Room/Triple Room',
            'Connecting Room',
            'Murphy Room',
            'Accessible Room/Disabled Room',
            'Smoking/Non Smoking Room',
            'Cabana Room',
        ];

        $information = [
            'As the name suggests, the standard room type is the most basic type of hotel room in a hotel. Usually, this type of room is priced relatively cheap. The facilities offered are also standard, such as a king size bed or two queen sizes. However, the offer given depends on each hotel. The standard room for 1-star and 5-star hotels is of course different.',
            'Basically, the superior room is a slightly better room type than the standard room type. The difference can be in the form of the facilities provided, the interior of the room, or the view from the room.',
            'Above the superior room hotel room type is the deluxe room. This room certainly has a larger room. There is a choice of mattresses that you can choose, double bed or twin bed. Usually, in terms of the interior of this room, it seems more luxurious.',
            'The junior suite room hotel room type is characterized by the presence of a living room. However, the living room is still in the same room as the bed. The living room is usually limited or partitioned off with a large cupboard so that the bed is not visible.',
            'The suite room is above the hotel room type junior suite room. The living room in this hotel room is separate from the bedroom. In terms of facilities, of course it is different from the junior suite room. In addition to the living room, usually this type of hotel room is equipped with a kitchen.',
            'The presidential suite is the best and most expensive type of hotel room. In fact, not all hotels have a presidential suite. The facilities offered are of course the best, starting from the interior, room views, and many others.',
            'The single room is the most common type of hotel room. This hotel room type consists of one single bed, sofa, and bathroom. Room size is also not too big. Usually this type of hotel room is chosen by backpackers or solo travelers because the facilities are indeed for one person and the price is cheap.',
            'From the name alone, you can guess that this hotel room type has two separate single size beds. This hotel room type is suitable for husband and wife or staying with friends with 2-3 people.',
            'Want to stay with more comfort and better facilities? You can order a double room hotel room type. This type of hotel room usually has a large bed size such as a king size. This double room is perfect for married couples who want to honeymoon.',
            'Going on a trip with a large family or friends? You can choose the type of hotel room family room. In terms of room size, of course it is much wider than other types of hotel rooms. This type of family room hotel room is usually available in one place with a king size and one bed with a smaller size.',
            "This type of hotel room with Connecting Room is suitable for those of you who go with a large family or group but want to have their own bedroom. Your rooms and other family members will be next to each other and there will be a door that connects your rooms. So, if you or other family members want to go to each other's rooms, you can go through the connecting door and don't have to bother going through the front door, Toppers.",
            'This Murphy room is a type of hotel room that provides a sofa bed in the room. This sofa bed is used as a bed at night and a living room during the day. The size of the Murphy Room is around 20 – 40 m. Wow, what an exciting concept!',
            'This Accessible Room/Disable Room type is available for guests with disabilities. The existence of this type of room is also required by law, you know, to avoid discrimination. This is also made to make it easier for these guests to stay at the hotel.',
            'Usually guests are not allowed to smoke in the room. However, many hotels already provide smoking/non smoking room types. This is also useful so as not to disturb future guests with the smell of cigarettes in the room. So, if you are a smoker, now you can book a room with the smoking room type.',
            'Do you want to swim immediately when you open the bedroom door? Or have a private pool? Choose the Cabana Room hotel room type! This hotel room type is indeed designed with a private swimming pool for the room order. The Cabana Room area is around 30 – 40 m.',
        ];

        for ($i = 0; $i < count($name); $i++) {
            Type::create([
                'name' => $name[$i],
                'information' => $information[$i]
            ]);
        }
    }
}
