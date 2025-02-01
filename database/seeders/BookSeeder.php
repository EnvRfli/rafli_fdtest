<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'description' => 'A story of the fabulously wealthy Jay Gatsby and his love for the beautiful Daisy Buchanan.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.5,
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'description' => 'The story of racial injustice and the loss of innocence in the American South.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.8,
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'description' => 'A dystopian novel set in a totalitarian society ruled by the Party and its leader, Big Brother.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.7,
            ],
            [
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'description' => 'A romantic novel of manners that explores the issues of marriage, morality, and misconceptions.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.6,
            ],
            [
                'title' => 'The Catcher in the Rye',
                'author' => 'J.D. Salinger',
                'description' => 'A story about Holden Caulfield and his experiences in New York City after being expelled from school.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.4,
            ],
            [
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'description' => 'A fantasy novel about the adventures of Bilbo Baggins and his quest to reclaim treasure guarded by a dragon.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.9,
            ],
            [
                'title' => 'Fahrenheit 451',
                'author' => 'Ray Bradbury',
                'description' => 'A dystopian novel where books are outlawed, and firemen burn any that are found.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.3,
            ],
            [
                'title' => 'Moby-Dick',
                'author' => 'Herman Melville',
                'description' => 'The story of Captain Ahab and his obsessive quest to kill the white whale, Moby-Dick.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.2,
            ],
            [
                'title' => 'War and Peace',
                'author' => 'Leo Tolstoy',
                'description' => 'A historical novel that intertwines the lives of individuals with the events of the Napoleonic Wars.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.7,
            ],
            [
                'title' => 'The Odyssey',
                'author' => 'Homer',
                'description' => 'An epic poem about the Greek hero Odysseus and his long journey home after the fall of Troy.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.6,
            ],
            [
                'title' => 'Crime and Punishment',
                'author' => 'Fyodor Dostoevsky',
                'description' => 'A psychological novel about the mental anguish and moral dilemmas of a young man who commits murder.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.8,
            ],
            [
                'title' => 'The Brothers Karamazov',
                'author' => 'Fyodor Dostoevsky',
                'description' => 'A philosophical novel that explores deep questions about God, free will, and morality.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.7,
            ],
            [
                'title' => 'The Divine Comedy',
                'author' => 'Dante Alighieri',
                'description' => 'An epic poem that describes Dante\'s journey through Hell, Purgatory, and Paradise.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.9,
            ],
            [
                'title' => 'The Iliad',
                'author' => 'Homer',
                'description' => 'An ancient Greek epic poem about the Trojan War and the hero Achilles.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.5,
            ],
            [
                'title' => 'Brave New World',
                'author' => 'Aldous Huxley',
                'description' => 'A dystopian novel about a futuristic society driven by technological advancements and consumerism.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.4,
            ],
            [
                'title' => 'The Lord of the Rings',
                'author' => 'J.R.R. Tolkien',
                'description' => 'An epic fantasy novel about the quest to destroy the One Ring and defeat the Dark Lord Sauron.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.9,
            ],
            [
                'title' => 'Anna Karenina',
                'author' => 'Leo Tolstoy',
                'description' => 'A tragic novel about the affair between Anna Karenina and Count Vronsky.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.6,
            ],
            [
                'title' => 'The Alchemist',
                'author' => 'Paulo Coelho',
                'description' => 'A philosophical book about a young shepherd\'s journey to find his personal legend.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.3,
            ],
            [
                'title' => 'The Little Prince',
                'author' => 'Antoine de Saint-Exupéry',
                'description' => 'A poetic tale about a young prince who travels the universe and learns about life.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.8,
            ],
            [
                'title' => 'The Road',
                'author' => 'Cormac McCarthy',
                'description' => 'A post-apocalyptic novel about a father and son\'s journey through a desolate landscape.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.2,
            ],
            [
                'title' => 'The Book Thief',
                'author' => 'Markus Zusak',
                'description' => 'A story about a young girl in Nazi Germany who steals books and shares them with others.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.7,
            ],
            [
                'title' => 'The Kite Runner',
                'author' => 'Khaled Hosseini',
                'description' => 'A story of friendship, betrayal, and redemption set in Afghanistan.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.6,
            ],
            [
                'title' => 'The Shining',
                'author' => 'Stephen King',
                'description' => 'A horror novel about a family\'s stay at an isolated hotel with a dark past.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.5,
            ],
            [
                'title' => 'The Da Vinci Code',
                'author' => 'Dan Brown',
                'description' => 'A mystery thriller about a symbologist who uncovers a conspiracy in the works of Leonardo da Vinci.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.1,
            ],
            [
                'title' => 'The Hunger Games',
                'author' => 'Suzanne Collins',
                'description' => 'A dystopian novel about a young girl who participates in a deadly televised competition.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.4,
            ],
            [
                'title' => 'The Girl with the Dragon Tattoo',
                'author' => 'Stieg Larsson',
                'description' => 'A psychological thriller about a journalist and a hacker investigating a wealthy family.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.3,
            ],
            [
                'title' => 'The Handmaid\'s Tale',
                'author' => 'Margaret Atwood',
                'description' => 'A dystopian novel about a totalitarian society where women are oppressed.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.6,
            ],
            [
                'title' => 'The Martian',
                'author' => 'Andy Weir',
                'description' => 'A science fiction novel about an astronaut stranded on Mars and his struggle to survive.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.7,
            ],
            [
                'title' => 'Gone Girl',
                'author' => 'Gillian Flynn',
                'description' => 'A psychological thriller about a marriage gone wrong and a mysterious disappearance.',
                'cover_image' => 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg',
                'rating' => 4.2,
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
