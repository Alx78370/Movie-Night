-- MySQL dump 10.13  Distrib 8.3.0, for Win64 (x86_64)
--
-- Host: localhost    Database: movie_night
-- ------------------------------------------------------
-- Server version	8.3.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actors`
--

DROP TABLE IF EXISTS `actors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `biography` varchar(10000) NOT NULL,
  `picture` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actors`
--

LOCK TABLES `actors` WRITE;
/*!40000 ALTER TABLE `actors` DISABLE KEYS */;
/*!40000 ALTER TABLE `actors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directors`
--

DROP TABLE IF EXISTS `directors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `directors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `biography` varchar(10000) NOT NULL,
  `picture` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directors`
--

LOCK TABLES `directors` WRITE;
/*!40000 ALTER TABLE `directors` DISABLE KEYS */;
INSERT INTO `directors` VALUES (1,'Frank','Darabont','1959-01-28','Three-time Oscar nominee Frank Darabont was born in a refugee camp in 1959 in Montbeliard, France, the son of Hungarian parents who had fled Budapest during the failed 1956 Hungarian revolution. Brought to America as an infant, he settled with his family in Los Angeles and attended Hollywood High School. His first job in movies was as a production assistant on the 1981 low-budget film, Hell Night (1981), starring Linda Blair. He spent the next six years working in the art department as a set dresser and in set construction while struggling to establish himself as a writer. His first produced writing credit (shared) was on the 1987 film, A Nightmare on Elm Street 3: Dream Warriors (1987), directed by Chuck Russell. Darabont is one of only six filmmakers in history with the unique distinction of having his first two feature films receive nominations for the Best Picture Academy Award: 1994\'s The Shawshank Redemption (1994) (with a total of seven nominations) and 1999\'s The Green Mile (1999) (four nominations). Darabont himself collected Oscar nominations for Best Adapted Screenplay for each film (both based on works by Stephen King), as well as nominations for both films from the Director\'s Guild of America, and a nomination from the Writers Guild of America for The Shawshank Redemption (1994). He won the Humanitas Prize, the PEN Center USA West Award, and the Scriptor Award for his screenplay of \"The Shawshank Redemption\". For \"The Green Mile\", he won the Broadcast Film Critics prize for his screenplay adaptation, and two People\'s Choice Awards in the Best Dramatic Film and Best Picture categories. The Majestic (2001), starring Jim Carrey, was released in December 2001. He executive-produced the thriller, Collateral (2004), for DreamWorks, with Michael Mann directing and Tom Cruise starring. Future produced-by projects include \"Way of the Rat\" at DreamWorks with Chuck Russell adapting and directing the CrossGen comic book series and \"Back Roads\", a Tawni O\'Dell novel, also at DreamWorks, with Todd Field attached to direct. Darabont and his production company, \"Darkwoods Productions\", have an overall deal with Paramount Pictures.','Franck Darabont.jpg'),(2,'Francis','Ford Coppola','1939-04-07','Francis Ford Coppola was born in 1939 in Detroit, Michigan, but grew up in a New York suburb in a creative, supportive Italian-American family. His father, Carmine Coppola, was a composer and musician. His mother, Italia Coppola (née Pennino), had been an actress. Francis Ford Coppola graduated with a degree in drama from Hofstra University, and did graduate work at UCLA in filmmaking. He was training as assistant with filmmaker Roger Corman, working in such capacities as sound-man, dialogue director, associate producer and, eventually, director of Dementia 13 (1963), Coppola\'s first feature film. During the next four years, Coppola was involved in a variety of script collaborations, including writing an adaptation of \"This Property is Condemned\" by Tennessee Williams (with Fred Coe and Edith Sommer), and screenplays for Is Paris Burning? (1966) and Patton (1970), the film for which Coppola won a Best Original Screenplay Academy Award. In 1966, Coppola\'s 2nd film brought him critical acclaim and a Master of Fine Arts degree. In 1969, Coppola and George Lucas established American Zoetrope, an independent film production company based in San Francisco. The company\'s first project was THX 1138 (1971), produced by Coppola and directed by Lucas. Coppola also produced the second film that Lucas directed, American Graffiti (1973), in 1973. This movie got five Academy Award nominations, including one for Best Picture. In 1971, Coppola\'s film The Godfather (1972) became one of the highest-grossing movies in history and brought him an Oscar for writing the screenplay with Mario Puzo The film was a Best Picture Academy Award-winner, and also brought Coppola a Best Director Oscar nomination. Following his work on the screenplay for The Great Gatsby (1974), Coppola\'s next film was The Conversation (1974), which was honored with the Golden Palm Award at the Cannes Film Festival, and brought Coppola Best Picture and Best Original Screenplay Oscar nominations. Also released that year, The Godfather Part II (1974), rivaled the success of The Godfather (1972), and won six Academy Awards, bringing Coppola Oscars as a producer, director and writer. Coppola then began work on his most ambitious film, Apocalypse Now (1979), a Vietnam War epic that was inspired by Joseph Conrad\'s Heart of Darkness (1993). Released in 1979, the acclaimed film won a Golden Palm Award at the Cannes Film Festival, and two Academy Awards. Also that year, Coppola executive produced the hit The Black Stallion (1979). With George Lucas, Coppola executive produced Kagemusha: The Shadow Warrior (1980), directed by Akira Kurosawa, and Mishima: A Life in Four Chapters (1985), directed by Paul Schrader and based on the life and writings of Yukio Mishima. Coppola also executive produced such films as The Escape Artist (1982), Hammett (1982) The Black Stallion Returns (1983), Barfly (1987), Wind (1992), The Secret Garden (1993), etc.\r\n\r\nHe helped to make a star of his nephew, Nicolas Cage. Personal tragedy hit in 1986 when his son Gio died in a boating accident. Francis Ford Coppola is one of America\'s most erratic, energetic and controversial filmmakers.','Francis Ford Coppola.jpg'),(3,'Christopher','Nolan','1970-07-30','Sir Christopher Edward Nolan CBE (born 30 July 1970) is a British and American filmmaker. Known for his Hollywood blockbusters with complex storytelling, he is considered a leading filmmaker of the 21st century. Nolan\'s films have earned over $6 billion worldwide, making him the seventh-highest-grossing film director of all time. His accolades include two Academy Awards and two British Academy Film Awards. Nolan was appointed as a Commander of the Order of the British Empire in 2019, and received a knighthood in 2024 for his contributions to film.\r\n\r\nNolan developed an interest in filmmaking from a young age. After studying English literature at University College London, he made several short films before his feature film debut with Following (1998). Nolan gained international recognition with his second film, Memento (2000), and transitioned into studio filmmaking with Insomnia (2002). He became a high-profile director with The Dark Knight trilogy (2005–2012), and found further success with The Prestige (2006), Inception (2010), Interstellar (2014), and Dunkirk (2017). After the release of Tenet (2020), Nolan parted ways with longtime distributor Warner Bros. Pictures, and signed with Universal Pictures for the biographical thriller Oppenheimer (2023), which won him Academy Awards for Best Director and Best Picture.','Christopher Nolan.jpg'),(4,'Peter','Jackson','1961-10-31','Sir Peter Jackson made history with The Lord of the Rings trilogy, becoming the first person to direct three major feature films simultaneously. The Fellowship of the Ring, The Two Towers and The Return of the King were nominated for and collected a slew of awards from around the globe, with The Return of the King receiving his most impressive collection of awards. This included three Academy Awards® (Best Adapted Screenplay, Best Director and Best Picture), two Golden Globes (Best Director and Best Motion Picture-Drama), three BAFTAs (Best Adapted Screenplay, Best Film and Viewers\' Choice), a Directors Guild Award, a Producers Guild Award and a New York Film Critics Circle Award.\r\n\r\nAs a follow up to The Lord of the Rings trilogy, in 2005, Jackson directed, wrote, and produced King Kong, for Universal Pictures. The film grossed over $500 million and won three Oscars®.\r\n\r\nJackson previously received widespread acclaim for his 1994 feature Heavenly Creatures, which received an Academy Award® nomination for Best Screenplay. Other film credits include The Frighteners, starring Michael J. Fox; the adult puppet feature Meet the Feebles; and Braindead, which won 16 international science fiction awards, including the Saturn. Jackson also co-directed the television documentary Forgotten Silver, which also hit the film festival circuit.\r\n\r\nJackson directed the Academy Award®-nominated The Lovely Bones, an adaptation of the acclaimed best-selling novel by Alice Sebold and produced the worldwide sci-fi hit District 9. He was a producer on Steven Spielberg\'s The Adventures of Tintin: The Secret of the Unicorn in 2011, with two more films set to come out in the future.\r\n\r\nHis most recent films include producer of 2018\'s action film Mortal Engines, based on a post-apocalyptic world where cities ride on wheels and consume each other to survive. Following Mortal Engines, he produced They Shall Not Grow Old, a documentary on World War I with never-before-seen footage. BAFTA nominated the film for Best Documentary, and it won the award for Outstanding Achievement in Sound Editing from the Motion Picture Sound Editors.\r\n\r\nJackson\'s next project is the music documentary The Beatles: Get Back, which he directed and produced, due to be released August, 2021.\r\n\r\nJackson works closely with partner Dame Fran Walsh, with whom he shares his writing and producing credits, as well as a family. Jackson has a special interest in WWI memorabilia and is the proud owner of several aircraft from that era.','Peter Jackson.jpg'),(5,'Quentin','Tarantino','1963-03-27','Quentin Jerome Tarantino was born in Knoxville, Tennessee. His father, Tony Tarantino, is an Italian-American actor and musician from New York, and his mother, Connie (McHugh), is a nurse from Tennessee. Quentin moved with his mother to Torrance, California, when he was four years old.\r\n\r\nIn January of 1992, first-time writer-director Tarantino\'s Reservoir Dogs (1992) appeared at the Sundance Film Festival. The film garnered critical acclaim and the director became a legend immediately. Two years later, he followed up Dogs success with Pulp Fiction (1994) which premiered at the Cannes film festival, winning the coveted Palme D\'Or Award. At the 1995 Academy Awards, it was nominated for the best picture, best director and best original screenplay. Tarantino and writing partner Roger Avary came away with the award only for best original screenplay. In 1995, Tarantino directed one fourth of the anthology Four Rooms (1995) with friends and fellow auteurs Alexandre Rockwell, Robert Rodriguez and Allison Anders. The film opened December 25 in the United States to very weak reviews. Tarantino\'s next film was From Dusk Till Dawn (1996), a vampire/crime story which he wrote and co-starred with George Clooney. The film did fairly well theatrically.\r\n\r\nSince then, Tarantino has helmed several critically and financially successful films, including Jackie Brown (1997), Kill Bill: Vol. 1 (2003), Kill Bill: Vol. 2 (2004), Inglourious Basterds (2009), Django Unchained (2012) and The Hateful Eight (2015).','Quentin Tarantino.jpg'),(6,'Robert','Zemeckis','1952-05-14','A whiz-kid with special effects, Robert is from the Spielberg camp of film-making (Steven Spielberg produced many of his films). Usually working with writing partner Bob Gale, Robert\'s earlier films show he has a talent for zany comedy (Romancing the Stone (1984), 1941 (1979)) and special effect vehicles (Who Framed Roger Rabbit (1988) and Back to the Future (1985)). His later films have become more serious, with the hugely successful Tom Hanks vehicle Forrest Gump (1994) and the Jodie Foster film Contact (1997), both critically acclaimed movies. Again, these films incorporate stunning effects. Robert has proved he can work a serious story around great effects.','Robert Zemeckis.jpg'),(7,'David','Fincher','1962-08-28','David Fincher was born in 1962 in Denver, Colorado, and was raised in Marin County, California. When he was 18 years old he went to work for John Korty at Korty Films in Mill Valley. He subsequently worked at ILM (Industrial Light and Magic) from 1981-1983. Fincher left ILM to direct TV commercials and music videos after signing with N. Lee Lacy in Hollywood. He went on to found Propaganda in 1987 with fellow directors Dominic Sena, Greg Gold and Nigel Dick. Fincher has directed TV commercials for clients that include Nike, Coca-Cola, Budweiser, Heineken, Pepsi, Levi\'s, Converse, AT&T and Chanel. He has directed music videos for Madonna, Sting, The Rolling Stones, Michael Jackson, Aerosmith, George Michael, Iggy Pop, The Wallflowers, Billy Idol, Steve Winwood, The Motels and, most recently, A Perfect Circle.\r\n\r\nAs a film director, he has achieved huge success with Se7en (1995), Fight Club (1999) and, Panic Room (2002).','David Fincher.jpg'),(8,'Irvin','Kershner','1923-04-29','Irvin Kershner was born on April 29, 1923 in Philadelphia, Pennsylvania. A graduate of the University of Southern California film school, Kershner began his career in 1950, producing documentaries for the United States Information Service in the Middle East. He later turned to television, directing and photographing a series of documentaries called \"Confidential File\". Kershner was one of the directors given his first break by producer Roger Corman, for whom he shot Stakeout on Dope Street (1958). The main theme that runs through many of his films is social alienation and human weaknesses - although his biggest commercial success was the science fiction blockbuster Star Wars: Episode V - The Empire Strikes Back (1980). Irvin Kershner died at age 87 of lung cancer in his home in Los Angeles, California on November 27, 2010.','Irvin Kershner.jpg'),(9,'Roman','Polanski','1933-08-18','Roman Polanski is a Polish film director, producer, writer and actor. Having made films in Poland, Britain, France and the USA, he is considered one of the few truly international filmmakers. Roman Polanski was born in Paris in 1933.\r\n\r\nHis parents returned to Poland from France in 1936, three years before World War II began. On Germany\'s invasion in 1939, as a family of mostly Jewish heritage, they were all sent to the Krakow ghetto. His parents were then captured and sent to two different concentration camps: His father to Mauthausen-Gusen in Austria, where he survived the war, and his mother to Auschwitz where she was murdered. Roman witnessed his father\'s capture and then, at only 7, managed to escape the ghetto and survive the war, at first wandering through the Polish countryside and pretending to be a Roman-Catholic kid visiting his relatives. Although this saved his life, he was severely mistreated suffering nearly fatal beating which left him with a fractured skull.\r\n\r\nLocal people usually ignored the cinemas where German films were shown, but Polanski seemed little concerned by the propaganda and often went to the movies. As the war progressed, Poland became increasingly war-torn and he lived his life as a tramp, hiding in barns and forests, eating whatever he could steal or find. Still under 12 years old, he encountered some Nazi soldiers who forced him to hold targets while they shot at them. At the war\'s end in 1945, he reunited with his father who sent him to a technical school, but young Polanski seemed to have already chosen another career. In the 1950s, he took up acting, appearing in Andrzej Wajda\'s A Generation (1955) before studying at the Lodz Film School. His early shorts such as Two Men and a Wardrobe (1958), Le gros et le maigre (1961) and Mammals (1962), showed his taste for black humor and interest in bizarre human relationships. His feature debut, Knife in the Water (1962), was one of the first Polish post-war films not associated with the war theme. It was also the first movie from Poland to get an Oscar nomination for best foreign film. Though already a major Polish filmmaker, Polanski chose to leave the country and headed to France. While down-and-out in Paris, he befriended young scriptwriter, Gérard Brach, who eventually became his long-time collaborator. The next two films, Repulsion (1965) and Cul-de-sac (1966), made in England and co-written by Brach, won respectively Silver and then Golden Bear awards at the Berlin International Film Festival. In 1968, Polanski went to Hollywood, where he made the psychological thriller, Rosemary\'s Baby (1968). However, after the brutal murder of his wife, Sharon Tate, by the Manson Family in 1969, the director decided to return to Europe. In 1974, he again made a US release - it was Chinatown (1974).\r\n\r\nIt seemed the beginning of a promising Hollywood career, but after his conviction for the sodomy of a 13-year old girl, Polanski fled from he USA to avoid prison. After Tess (1979), which was awarded several Oscars and Cesars, his works in 1980s and 1990s became intermittent and rarely approached the caliber of his earlier films. It wasn\'t until The Pianist (2002) that Polanski came back to full form. For that movie, he won nearly all the most important film awards, including the Oscar for Best Director, Cannes Film Festival\'s Palme d\'Or, the BAFTA and Cesar Award.\r\n\r\nHe still likes to act in the films of other directors, sometimes with interesting results, as in A Pure Formality (1994).','Roman Polanski.jpg');
/*!40000 ALTER TABLE `directors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `genres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres`
--

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` VALUES (1,'Drama'),(2,'Crime'),(3,'Action'),(4,'Adventure'),(5,'Romance'),(6,'Sci-fi'),(7,'Fantasy'),(8,'Thriller'),(9,'Mystery '),(10,'Biography'),(11,'Music'),(12,'War');
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `release_date` year NOT NULL,
  `directors_id` int NOT NULL,
  `imdb_grade` decimal(2,1) NOT NULL,
  `synopsis` varchar(10000) NOT NULL,
  `cover` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_directors_id` (`directors_id`),
  CONSTRAINT `fk_directors_id` FOREIGN KEY (`directors_id`) REFERENCES `directors` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies`
--

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES (1,'The Shawshank Redemption',1994,1,9.3,'Andy Dufresne is sent to Shawshank Prison for the murder of his wife and her secret lover. He is very isolated and lonely at first, but realizes there is something deep inside your body that people can\'t touch or get to....\'HOPE\'. Andy becomes friends with prison \'fixer\' Red, and Andy epitomizes why it is crucial to have dreams. His spirit and determination lead us into a world full of imagination, one filled with courage and desire. Will Andy ever realize his dreams?','The Shawshank Redemption.jpg'),(2,'The Godfather',1972,2,9.2,'The story begins as \"Don\" Vito Corleone, the head of a New York Mafia \"family\", oversees his daughter\'s wedding with his wife Carmela. His beloved son Michael has just come home from the war, but does not intend to become part of his father\'s business. Through Michael\'s life the nature of the family business becomes clear. The business of the family is just like the head of the family, kind and benevolent to those who give respect, but given to ruthless violence whenever anything stands against the good of the family. Don Vito lives his life in the way of the old country, but times are changing and some don\'t want to follow the old ways and look out for community and \"family\". An up and coming rival of the Corleone family wants to start selling drugs in New York, and needs the Don\'s influence to further his plan. The clash of the Don\'s fading old world values and the new ways will demand a terrible price, especially from Michael, all for the sake of the family.','The Godfather.jpg'),(3,'The Dark Knight',2008,3,9.0,'Gotham\'s new District Attorney has been elected. His name is Harvey Dent, and he has a radical new agenda that threatens to take down Gotham\'s organized crime underworld once and for all with an iron fist. But the emergence of the rogue vigilante known as Batman has caused problems for Dent and his agenda. A new criminal mastermind known only as \"The Joker\" has arrived and aims to take Gotham out from under Harvey Dent\'s iron fist. The Joker stages a masterfully planned bank robbery and robs the Gotham mob blind. He uses this money to stage a series of horrific and strategic attacks against the city and its people, each one carefully planned and aimed at Dent and Batman, while causing the rest of the city to enter panic mode. Meanwhile, Batman thinks he might have found a lead to The Joker thanks to Wayne Enterprises\' dealings with a shady Chinese banker, and that takes Batman and Alfred to Hong Kong. The Joker has no rules, but Batman has only one, and the Joker aims to make Batman break his only rule. But who will be the one to take him out, will it be rogue vigilante Batman, or will it be elected official Harvey Dent, the new hero with a face?','THE DARK KNIGHT - LE CHEVALIER NOIR.jpg'),(4,'The Lord of the Rings: The Return of the King',2003,4,9.0,'Sauron\'s forces have laid siege to Minas Tirith, the capital of Gondor, in their efforts to eliminate the race of men. The once-great kingdom, watched over by a fading Steward, has never been in more desperate need of its King. But can Aragorn answer the call of his heritage and become what he was born to be? In no small measure, the fate of Middle-earth rests on his broad shoulders. With the final battle joined, and the legions of darkness gathering, Gandalf urgently tries to rally Gondor\'s broken army to action. He is aided by Rohan\'s King Theoden, who unites his warriors for history\'s biggest test. Yet even with their courage and passionate loyalty, the forces of men, with Eowyn and Merry hidden amongst them, are no match for the enemies swarming against Gondor. Still, in the face of great losses, they charge forward into the battle of their lifetimes, tied together by their singular goal to keep Sauron distracted and give the Ring Bearer a chance to complete his quest. Their hopes rest with Frodo, a tiny but determined Hobbit making a perilous trip across treacherous enemy lands to cast the One Ring into the fires of Mount Doom. The closer Frodo gets to his destination, the heavier his burden becomes, and the more he must rely on Samwise Gamgee. Gollum, and the Ring, will test Frodo\'s allegiances and, ultimately, his humanity.','The Lord of the Rings The Return of the King.jpg'),(5,'Pulp Fiction',1994,5,8.9,'Faced with life\'s cruel irony, the unpredictable stories of a well-dressed pair of low-level hitmen; a gangster\'s statuesque moll, and a double-crossing prizefighter become inextricably intertwined, as the small-time crooks, Honey Bunny and Pumpkin, summon up the courage to hold up their favourite L.A. diner. Entrusted with retrieving a glow-emitting leather suitcase which belongs to their boss--the powerful crime kingpin, Marsellus--instead, the dark-suited gunmen, Vincent Vega and Jules Winnfield, end up with a bloody mess. Fortunately--with men like Mr Wolf always around to handle a crisis--there\'s time to cool off in a long twist contest, while at the same time, the proud champion boxer, Butch, makes the decision of a lifetime. Soon, things will come full circle, as, once more, Jules and Vincent find themselves in the perfect dead-end situation, exactly where it all began: an all-too-familiar cafeteria. Is truth stranger than fiction?','PULP FICTION.jpg'),(6,'Forrest Gump',1994,6,8.8,'The movie Forrest Gump follows the life events of a man who shares the name as the title of the film. Gump faces many tribulations throughout his life, but he never lets any of them interfere with his happiness. From wearing braces on his legs, to having a below average IQ and even being shot, Gump continues to believe that good things will happen and goes after his dreams. While several less than ideal things occur during Gump\'s life, he manages to turn each setback into something good for him, such as when he finally gets his braces off he discovers that he is capable of running faster than most other people. This skill allows Gump to not only escape his bullies while he is a child in Greenbow, but also to gain a football scholarship, save many soldiers\' lives and become famous for his ability. While Gump eventually achieves the majority of the things he hoped to throughout the movie, it proved a much more difficult task to win the heart of his life-long friend Jenny Curran. The movie is centered on Forrest Gump and the incidences that occur during his life, but during each period in his lifetime he thinks back of Jenny and how important she is to him. Although the two characters grew up together and shared a very close friendship, as the movie progresses they grow apart. This upsets Gump who cares immensely for the girl who had a rough start in life, and it seems the two always end up back in each other\'s lives, often in extraordinary ways like meeting in the Reflection Pond in D.C. Even though Gump is the main character of the film, it similarly tells the story of Curran and the hardships she faces.','Forrest Gump.jpg'),(7,'Fight Club',1999,7,8.8,'A young man leads a pretty humdrum life assessing car crashes to determine if his automobile company should issue recalls to fix problems. He also suffers from insomnia and takes to attending group therapy sessions for people who have survived various diseases. There he meets Marla who like him attends these sessions though she is neither a victim nor a survivor. His life changes when he meets Tyler Durden on a flight home. Tyler seems to be everything that he\'s not and together they create a men-only group for bare-knuckle fighting. It soon becomes all the rage with fight clubs springing up across the country and the group itself becoming an anti-capitalist domestic terrorist organization. Tyler and Marla develop a relationship leaving him often on the outside of what is going on. He soon finds that the group is out of control and after a major self-revelation decides there is only one way out.','Fight Club.jpg'),(8,'Inception',2010,3,8.8,'Dominic Cobb is the foremost practitioner of the artistic science of extraction, inserting oneself into a subject\'s dreams to obtain hidden information without the subject knowing, a concept taught to him by his professor father-in-law, Dr. Stephen Miles. Dom\'s associates are Miles\' former students, who Dom requires as he has given up being the dream architect for reasons he won\'t disclose. Dom\'s primary associate, Arthur, believes it has something to do with Dom\'s deceased wife, Mal, who often figures prominently and violently in those dreams, or Dom\'s want to \"go home\" (get back to his own reality, which includes two young children). Dom\'s work is generally in corporate espionage. As the subjects don\'t want the information to get into the wrong hands, the clients have zero tolerance for failure. Dom is also a wanted man, as many of his past subjects have learned what Dom has done to them. One of those subjects, Mr. Saito, offers Dom a job he can\'t refuse: to take the concept one step further into inception, namely planting thoughts into the subject\'s dreams without them knowing. Inception can fundamentally alter that person as a being. Saito\'s target is Robert Michael Fischer, the heir to an energy business empire, which has the potential to rule the world if continued on the current trajectory. Beyond the complex logistics of the dream architecture of the case and some unknowns concerning Fischer, the biggest obstacles in success for the team become worrying about one aspect of inception which Cobb fails to disclose to the other team members prior to the job, and Cobb\'s newest associate Ariadne\'s belief that Cobb\'s own subconscious, especially as it relates to Mal, may be taking over what happens in the dreams.','inception.jpg'),(9,'Star Wars: Episode V - The Empire Strikes Back',1980,8,8.7,'The legendary saga continues as the Rebel Alliance faces increasing challenges from the powerful Galactic Empire. Luke Skywalker, Han Solo, and Princess Leia Organa find themselves confronting new trials that test their courage, friendships, and beliefs. The Rebel Alliance has established a hidden base on the icy planet of Hoth, where they hope to regroup and plan their next moves against the Empire. Luke Skywalker receives a message from a familiar source, prompting him to seek further guidance in understanding his connection to the Force. Han Solo and Princess Leia\'s journey takes them on a perilous path as they navigate through a galaxy under Imperial control. Their actions and decisions lead to unforeseen consequences that will impact the fate of the Rebellion. Meanwhile, the dark presence of Darth Vader looms, as he relentlessly pursues the Rebels while dealing with inner conflicts of his own.','Star Wars Episode V The Empire Strikes Back.jpg'),(10,'Interstellar',2014,3,8.7,'In the near future around the American Midwest, Cooper, an ex-science engineer and pilot, is tied to his farming land with his daughter Murph and son Tom. As devastating sandstorms ravage Earth\'s crops, the people of Earth realize their life here is coming to an end as food begins to run out. Eventually stumbling upon a N.A.S.A. base 6 hours from Cooper\'s home, he is asked to go on a daring mission with a few other scientists into a wormhole because of Cooper\'s scientific intellect and ability to pilot aircraft unlike the other crew members. In order to find a new home while Earth decays, Cooper must decide to either stay, or risk never seeing his children again in order to save the human race by finding another habitable planet.','Interstellar.jpg'),(11,'The Green Mile',1999,1,8.6,'It\'s just another normal day on the Green Mile for prison guard Paul Edgecomb. That is until huge John Coffey is sent there. Unlike the hulking brute that Coffey looks like, he is in fact kind at heart. Whilst watching over Coffey, Edgecomb learns that there is more to Coffey than can be seen.','The Green Milejpg.jpg'),(12,'The Pianist',2002,9,8.5,'Filmmaker Roman Polanski, who as a boy growing up in Poland watched while the Nazis devastated his country during World War II, directed this downbeat drama based on the story of a privileged musician who spent five years struggling against the Nazi occupation of Warsaw. Wladyslaw Szpilman (Adrien Brody) is a gifted classical pianist born to a wealthy Jewish family in Poland. The Szpilmans have a large and comfortable flat in Warsaw which Wladyslaw shares with his mother and father (Maureen Lipman and Frank Finlay), his sisters Halina and Regina (Jessica Kate Meyer and Julia Rayner), and his brother, Henryk (Ed Stoppard). While Wladyslaw and his family are aware of the looming presence of German forces and Hitler\'s designs on Poland, they\'re convinced that the Nazis are a menace which will pass, and that England and France will step forward to aid Poland in the event of a real crisis. Wladyslaw\'s naivete is shattered when a German bomb rips through a radio studio while he performs a recital for broadcast. During the early stages of the Nazi occupation, as a respected artist, he still imagines himself above the danger, using his pull to obtain employment papers for his father and landing a supposedly safe job playing piano in a restaurant. But as the German grip tightens upon Poland, Wladyslaw and his family are selected for deportation to a Nazi concentration camp. Refusing to face a certain death, Wladyslaw goes into hiding in a comfortable apartment provided by a friend. However, when his benefactor goes missing, Wladyslaw is left to fend for himself and he spends the next several years dashing from one abandoned home to another, desperate to avoid capture by German occupation troops.','The Pianist.jpg');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies_actors`
--

DROP TABLE IF EXISTS `movies_actors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `movies_actors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `movies_id` int NOT NULL,
  `actors_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_movies_actors` (`movies_id`),
  KEY `FK_actors_movies` (`actors_id`),
  CONSTRAINT `FK_actors_movies` FOREIGN KEY (`actors_id`) REFERENCES `actors` (`id`),
  CONSTRAINT `FK_movies_actors` FOREIGN KEY (`movies_id`) REFERENCES `movies` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies_actors`
--

LOCK TABLES `movies_actors` WRITE;
/*!40000 ALTER TABLE `movies_actors` DISABLE KEYS */;
/*!40000 ALTER TABLE `movies_actors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies_genres`
--

DROP TABLE IF EXISTS `movies_genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `movies_genres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `movies_id` int NOT NULL,
  `genres_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_movies_genres` (`movies_id`),
  KEY `fk_genres_id` (`genres_id`),
  CONSTRAINT `fk_genres_id` FOREIGN KEY (`genres_id`) REFERENCES `genres` (`id`),
  CONSTRAINT `fk_movies_genres` FOREIGN KEY (`movies_id`) REFERENCES `movies` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies_genres`
--

LOCK TABLES `movies_genres` WRITE;
/*!40000 ALTER TABLE `movies_genres` DISABLE KEYS */;
INSERT INTO `movies_genres` VALUES (1,1,1),(2,2,1),(3,2,2),(4,3,1),(5,3,2),(6,3,3),(7,4,1),(8,4,3),(9,4,4),(10,5,1),(11,5,2),(12,6,1),(13,6,5),(14,7,1),(15,8,3),(16,8,4),(17,8,6),(18,9,3),(19,9,4),(20,9,6),(21,10,1),(22,10,4),(23,10,6),(24,3,8),(25,4,7),(26,8,8),(27,9,7),(28,11,1),(29,11,2),(30,11,7),(31,12,1),(32,12,10),(33,12,11),(34,12,12);
/*!40000 ALTER TABLE `movies_genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `user_name` varchar(10) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UC_user` (`user_name`,`user_password`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('alexis','mdpp',4),('Alx78','mdp',1),('Cris','mdp3',2),('Vacheta','mdp2',3);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-25  9:47:05
