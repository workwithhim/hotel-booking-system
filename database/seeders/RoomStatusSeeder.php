<?php

namespace Database\Seeders;

use App\Models\RoomStatus;
use Illuminate\Database\Seeder;

class RoomStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Vacant',
            'Occupied',
            'Occupied Clean',
            'Occupied Dirty',
            'Vacant Clean Inspected',
            'Vacant Clean',
            'Vacant Dirty',
            'Compliment',
            'House Use',
            'Do not Disturb',
            'Sleep Out',
            'Skipper',
            'Out of Service',
            'Out of Order',
            'Due Out / Expected Departure',
            'Expected Arrival',
            'Check Out',
            'Late Check Out',
            'Occupeid no Luggage',
            'Double Lock',
        ];

        $codes = [
            'V',
            'O',
            'OC',
            'OD',
            'VCI',
            'VC',
            'VD',
            'Comp',
            'HU',
            'DND',
            'SO',
            'Skip',
            'OS',
            'OOO',
            'DO/ED',
            'EA',
            'CO',
            'LCO',
            'ONL',
            'DL',
        ];

        $informations = [
            'A term for an empty room.',
            'A room that is being occupied by someone legally and registered as a hotel guest.',
            'A room that is being occupied by someone legally and registered as a hotel guest in a clean room.',
            "A room that is being occupied by someone legally and registered as a hotel guest in a dirty room. This happened due to a change in status from OC to OD after one night's stay.",
            'An empty room that has been cleaned and inspected by a floor supervisor and is ready to receive guests (for sale).',
            'The room is empty and clean.',
            'Empty room with dirty condition. Dirty rooms can occur due to guests who have checked out or cleaning programs from housekeeping.',
            'A room that was registered by a guest, but the room is free of charge (free).',
            'Registered rooms but used by hotel management.',
            "Rooms that put this sign mean guests don't want to be disturbed.",
            'A guest who is still registered, but the room is not being used because the guest has to leave the hotel for a few days or the guest is sleeping outside the hotel area.',
            'The guest leaves the hotel before paying all of his obligations.',
            'The status of the room is under repair.',
            'Rooms that need serious repairs, repairs usually take more than one day. This status can occur due to damage to the room or cleaning programs from housekeeping. Out of orders reduce room availability.',
            'List of expected rooms for check-out today according to the departure date.',
            'The list of names of guests expected to arrive today.',
            'Guests who have left the hotel today after paying off all their obligations including submitting the keys used to the front office.',
            'Guest requests to leave the hotel later than the specified check out time.',
            'A guest who is still registered in a room without any items in it.',
            'Guest requests to the hotel to do a double lock so that no one can enter the room.',
        ];

        for ($i = 0; $i < count($codes); $i++) {
            RoomStatus::create([
                'name' => $names[$i],
                'code' => $codes[$i],
                'information' => $informations[$i]
            ]);
        }
    }
}
