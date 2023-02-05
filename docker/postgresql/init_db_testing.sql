--
-- PostgreSQL database dump
--

-- Dumped from database version 14.6
-- Dumped by pg_dump version 14.6

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: laravel_repository_service_pattern_testing; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE laravel_repository_service_pattern_testing WITH TEMPLATE = template0 ENCODING = 'UTF8';


ALTER DATABASE laravel_repository_service_pattern_testing OWNER TO postgres;

\connect laravel_repository_service_pattern_testing

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.users VALUES (1, 'Default User', 'default.user@gmail.com', NULL, '$2y$10$w7kpSrhn6F8WyA.U5lMcAOLEj72eBvIBjDnapc2NFFc/Vvd4f0r8e', NULL, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.users VALUES (2, 'Prof. Magnolia Wiza DVM', 'callie23@yahoo.com', NULL, '$2y$04$t9qmMllbgLy9u7f.wWs1GeGEdXKWKnRu1CeScMB8TR8/YQVuggQLW', NULL, '2023-01-30 18:07:36', '2023-01-30 18:07:36');


--
-- Data for Name: courses; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.courses VALUES (1, 'dolorum', 'Dignissimos maxime ad et quas quasi non. Occaecati repellendus placeat quisquam eos molestiae. Qui accusantium ipsa et consequuntur voluptas.', 5, '2023-01-31', '2023-04-11', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (2, 'ducimus', 'Quam voluptatem placeat reiciendis sed voluptatibus perferendis. Alias asperiores facilis mollitia sed. Eveniet iusto ea soluta sapiente. Qui est temporibus eum quam nihil ratione.', 9, '2023-02-06', '2023-03-01', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (3, 'et', 'Ratione dolore laboriosam sit natus culpa et dolorem. Quas ea quo in velit corrupti molestiae. Saepe eos quia voluptas quia.', 3, '2023-01-30', '2023-02-25', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (4, 'hic', 'Ipsum tenetur natus vitae aut sunt facilis et. Dolore veritatis quis tempora itaque nisi soluta. Asperiores beatae qui repudiandae vitae et cumque minima architecto.', 2, '2023-01-31', '2023-03-24', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (5, 'voluptas', 'Voluptate facilis explicabo nihil enim. Aspernatur minima et voluptatibus et. Sed quibusdam et aut enim a.', 4, '2023-02-02', '2023-04-18', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (6, 'molestiae', 'Nulla quo nihil ab est ipsa ut quidem cum. Est nulla et dolores quia et.', 7, '2023-02-04', '2023-04-24', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (7, 'dolorem', 'Tempora ea deserunt enim numquam fugiat similique. Aut magnam voluptatem excepturi impedit aut quas. Odio qui quis sit iste qui eligendi.', 3, '2023-02-03', '2023-02-26', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (8, 'cupiditate', 'Ullam eos illo ea et ab totam. Neque eos ut qui eos aspernatur sint. Id quis excepturi minus quo fugit sunt quia.', 3, '2023-02-06', '2023-04-15', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (9, 'sint', 'Tempore deserunt excepturi ea facere consequatur eos illum. Hic et molestiae et optio. Rerum iste praesentium optio sit aut eveniet sit. Ipsum veritatis amet autem quos maiores eum iusto.', 5, '2023-02-05', '2023-03-24', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (10, 'est', 'Deserunt voluptas veniam consequatur suscipit repellendus. Placeat sapiente illo aut et ut. Qui amet eos maxime velit et. Quo nihil non sed nobis.', 7, '2023-01-31', '2023-03-04', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (11, 'non', 'Qui omnis quo unde veniam consequuntur vel id. Suscipit a placeat molestiae eos. Nemo deleniti minus rem harum ad commodi. Ut nulla sit distinctio laboriosam itaque dolor praesentium ea.', 9, '2023-02-03', '2023-03-06', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (12, 'qui', 'Rerum quas molestias esse incidunt. Explicabo quo corporis optio molestiae illo quaerat quae nihil. Hic quaerat voluptatem facere sint laborum nostrum nesciunt doloribus.', 6, '2023-01-31', '2023-04-12', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (13, 'repudiandae', 'Aperiam laborum quisquam id sed rerum ea. Accusamus vel ut dolor qui dolorum harum ut. Voluptas et facere consequatur laboriosam expedita cum natus.', 7, '2023-02-01', '2023-03-06', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (14, 'amet', 'Inventore numquam aut expedita. Facere et quisquam occaecati velit nam reprehenderit quidem. Eligendi voluptates aut tempore nam magni dolores molestias.', 4, '2023-02-04', '2023-03-15', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (15, 'ab', 'Minus eveniet ut consequatur praesentium omnis. Omnis at mollitia vel repudiandae quidem. Praesentium ut rerum modi perspiciatis aut necessitatibus quos.', 7, '2023-02-04', '2023-04-09', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (16, 'officiis', 'Autem et neque facere expedita ipsa. At nam praesentium eius eum optio adipisci doloremque. Voluptate vero temporibus eos dolore id nihil. Non eos incidunt aut nemo quisquam voluptate aspernatur qui. Eum ex fugiat magnam ut commodi alias.', 1, '2023-01-31', '2023-04-03', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (17, 'quaerat', 'Dolorem aut sed aliquam aspernatur voluptatem. Ratione laboriosam incidunt consequuntur non tempora quos eaque. Magnam qui repellendus voluptates voluptatem qui numquam beatae. Sit neque nostrum et cumque.', 7, '2023-01-31', '2023-04-23', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (18, 'minima', 'Minima rerum quibusdam est aut ducimus exercitationem. Ipsam dolorum reiciendis aut voluptatem rerum. Laborum est consequatur autem ut corrupti. Optio voluptatem officiis et quidem consequatur quo.', 4, '2023-02-03', '2023-02-20', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (19, 'facere', 'Laboriosam aliquam voluptas cumque dolorum. Molestiae ut ratione perferendis porro dolor repellat.', 9, '2023-02-02', '2023-03-27', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (20, 'architecto', 'Quibusdam accusamus non culpa provident est earum praesentium. Corporis fugit sunt ut tempora dolores. Nesciunt aspernatur et ratione quas modi sit ad.', 6, '2023-01-31', '2023-03-07', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (21, 'harum', 'Tenetur odit eveniet voluptatem ut. Velit minima et minima temporibus. Nam autem atque ratione.', 7, '2023-02-04', '2023-02-28', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (22, 'corporis', 'Nihil fugit qui adipisci officia non. Fuga animi ratione sed sint. Porro quidem aut earum quibusdam nam eos ipsam laboriosam.', 6, '2023-02-01', '2023-03-11', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (23, 'qui', 'Deserunt nihil labore aut voluptatem recusandae asperiores. Animi earum et veritatis repudiandae. Reprehenderit sequi suscipit explicabo nobis cumque tempora autem sunt. Pariatur perferendis id expedita laboriosam.', 9, '2023-02-05', '2023-03-28', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (24, 'culpa', 'Et temporibus totam qui occaecati non. Dolores vel sequi enim. Sed animi dolor omnis aperiam debitis. Eum non porro illo qui sunt.', 2, '2023-01-31', '2023-04-18', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.courses VALUES (25, 'nulla', 'Dolores aut et repellat inventore dolor suscipit. Tempora quasi ratione nulla et dolore. Ea earum quia et non similique et.', 6, '2023-02-02', '2023-02-25', true, 1, '2023-01-30 18:07:17', '2023-01-30 18:07:17');


--
-- Data for Name: departments; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.departments VALUES (3, 'Paucek LLC', 'culpa', 0, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.departments VALUES (4, 'Kling, Kuphal and Homenick', 'dolor', 0, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.departments VALUES (5, 'Gerhold-Beier', 'delectus', 0, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.departments VALUES (6, 'Jacobson-Runolfsson', 'labore', 0, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.departments VALUES (7, 'Altenwerth-Kutch', 'sunt', 0, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.departments VALUES (8, 'Funk-Bauch', 'sapiente', 0, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.departments VALUES (9, 'Runolfsdottir Group', 'dolorum', 0, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.departments VALUES (10, 'Bednar, Rogahn and Thompson', 'voluptas', 0, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.departments VALUES (11, 'Watsica, Franecki and Runolfsdottir', 'mollitia', 0, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.departments VALUES (12, 'Kozey-Mayert', 'modi', 0, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.departments VALUES (13, 'Metz, Reinger and Hyatt', 'perspiciatis', 0, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.departments VALUES (14, 'Feest-Murray', 'dignissimos', 0, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.departments VALUES (15, 'McCullough, Hoppe and Larson', 'vero', 0, '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.departments VALUES (16, 'Kling, Koepp and Deckow', 'dolore', 0, '2023-01-30 18:07:32', '2023-01-30 18:07:32');
INSERT INTO public.departments VALUES (1, 'Beatty-Cummings', 'eveniet', 0, '2023-01-30 18:07:17', '2023-01-30 18:07:32');


--
-- Data for Name: positions; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.positions VALUES (3, 'Manager', 'omnis', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (4, 'Percussion Instrument Repairer', 'illo', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (5, 'Scanner Operator', 'et', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (6, 'Forest Fire Fighting Supervisor', 'cum', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (7, 'Vending Machine Servicer', 'quis', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (8, 'Petroleum Technician', 'ut', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (9, 'Advertising Sales Agent', 'iusto', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (10, 'Entertainer and Performer', 'corrupti', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (11, 'Engineering Manager', 'laborum', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (12, 'Drilling and Boring Machine Tool Setter', 'voluptas', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (13, 'Fire Fighter', 'nesciunt', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (14, 'Employment Interviewer', 'sit', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (15, 'Nursing Instructor', 'voluptatem', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (16, 'Law Teacher', 'delectus', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (17, 'Plating Operator OR Coating Machine Operator', 'et', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (18, 'Surveying Technician', 'deleniti', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (19, 'Pewter Caster', 'quae', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (20, 'Usher', 'recusandae', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.positions VALUES (21, 'Luettgen, Mohr and O''Keefe', 'facere', '2023-01-30 18:07:33', '2023-01-30 18:07:33');
INSERT INTO public.positions VALUES (1, 'Wiza-Thiel', 'saepe', '2023-01-30 18:07:17', '2023-01-30 18:07:34');


--
-- Data for Name: employees; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.employees VALUES (3, 'Libbie Walker', '1964-11-04', true, 18, 13, '64142 Brycen Brook
Narcisofort, OH 70948-2988', 39, '+12409869504', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.employees VALUES (4, 'Lura Gottlieb', '1967-06-19', true, 14, 11, '63148 Bahringer Burg
South Danny, GA 73148-0391', 46, '+16407783068', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.employees VALUES (5, 'Kitty Kiehn', '1978-12-18', true, 1, 14, '51975 Norma Burgs
Beckertown, IL 28947-1658', 24, '+17632384073', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.employees VALUES (6, 'Vicky Kuvalis', '1990-03-09', true, 9, 1, '7976 Velda Isle
Port Rubyeberg, NH 67875-1763', 61, '+16603932388', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.employees VALUES (7, 'Jakayla Watsica', '2002-05-16', true, 5, 8, '357 Weimann Mountain Suite 089
Abnertown, VT 53807-4700', 29, '+17546681590', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.employees VALUES (8, 'Marisol Veum', '1999-05-01', true, 13, 3, '10346 DuBuque Club Suite 404
East Candice, OH 92591-0899', 20, '+15314374374', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.employees VALUES (9, 'Rebeka Kling', '1975-03-11', true, 13, 8, '2615 Catharine Expressway
Augustusmouth, FL 54422', 46, '+16696801087', '2023-01-30 18:07:17', '2023-01-30 18:07:17');
INSERT INTO public.employees VALUES (10, 'Dayna Barton', '1965-03-07', true, 5, 6, '2042 Feeney Knolls Apt. 359
East Tyler, NY 06880', 49, '+19562057047', '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employees VALUES (11, 'Angela Schultz', '2002-05-11', true, 10, 3, '574 Haley Rest
West Simeon, AL 50334-5914', 37, '+15755635803', '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employees VALUES (12, 'Janis Walter', '1978-03-31', true, 8, 1, '9015 Osinski Meadow Apt. 122
Wizaside, KS 48837-1302', 59, '+18186234211', '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employees VALUES (13, 'Haven Bernier', '1972-01-14', true, 8, 13, '9806 Marcella Union Apt. 227
Rooseveltburgh, TX 00915', 63, '+18328567971', '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employees VALUES (14, 'Clarabelle Kilback', '1975-11-23', true, 17, 8, '60657 Harber Pine
Braunport, MO 72563-9930', 58, '+17194768375', '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employees VALUES (15, 'Lenore Witting', '1998-05-15', true, 3, 9, '12905 Denesik Spurs Suite 046
Camrynhaven, VT 06735', 61, '+18143000724', '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employees VALUES (16, 'Angel Bahringer', '1973-05-08', true, 8, 7, '7871 Bauch Extensions
Kuhlmanburgh, NM 83328-3214', 33, '+14193922285', '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employees VALUES (17, 'Julia Schaefer', '1980-11-11', true, 4, 13, '367 Chase Well
Stiedemannbury, MI 58217-0069', 39, '+16284685701', '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employees VALUES (19, 'Marlee Conroy', '1970-05-30', true, 9, 3, '3949 Dusty Lane Suite 914
Dareside, ND 99823-5996', 34, '+19726860303', '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employees VALUES (20, 'Janelle Tremblay', '1997-09-21', true, 13, 1, '36278 Toy Street
Allymouth, NE 91219', 29, '+13319421576', '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employees VALUES (21, 'Lyla O''Keefe', '1974-06-11', true, 5, 13, '778 Alicia Crescent
Port Kraigbury, WI 93164', 54, '+14582143945', '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employees VALUES (23, 'Syble McKenzie', '1967-10-28', true, 6, 9, '7129 Kaitlyn Path Suite 022
West Hettie, RI 36296', 62, '+17202169626', '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employees VALUES (24, 'Pietro Kub', '1969-09-06', true, 7, 12, '17075 Kiley Mills Apt. 353
North Earline, MT 39314', 38, '+15868349907', '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employees VALUES (25, 'Orin McDermott', '1997-04-17', true, 11, 3, '593 Herman Key
Llewellynton, NE 69363-8228', 56, '+15416265416', '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employees VALUES (26, 'Lavinia Turner', '1981-07-13', true, 11, 5, '1589 Werner Parks Suite 285
East Jalen, KY 53532', 34, '+13236142026', '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employees VALUES (27, 'Evans Beatty', '1975-10-22', true, 9, 15, '853 Verlie Ford Apt. 389
East Beatriceberg, DE 38178-4935', 45, '+13512318010', '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employees VALUES (28, 'Clifton Sipes', '1980-12-25', true, 1, 8, '7982 Anika Lakes Suite 512
New Terry, OK 24245', 57, '+15208122969', '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employees VALUES (30, 'Adrian Pfannerstill', '1993-02-03', true, 16, 7, '1790 Davion Trail Suite 013
Gorczanyton, NV 12478-8504', 26, '+16032521291', '2023-01-30 18:07:18', '2023-01-30 18:07:18');


--
-- Data for Name: employee_courses; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.employee_courses VALUES (7, 3, 14, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (8, 3, 17, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (9, 3, 22, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (10, 4, 12, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (11, 4, 16, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (12, 4, 24, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (13, 5, 14, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (14, 5, 20, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (15, 5, 25, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (16, 6, 12, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (17, 6, 13, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (18, 6, 24, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (19, 7, 15, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (20, 7, 17, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (21, 7, 22, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (22, 8, 15, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (23, 8, 20, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (24, 8, 22, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (25, 9, 12, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (26, 9, 16, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (27, 9, 17, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (28, 10, 21, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (29, 10, 22, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (30, 10, 24, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (31, 11, 11, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (32, 11, 21, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (33, 11, 22, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (34, 12, 13, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (35, 12, 14, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (36, 12, 17, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (37, 13, 14, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (38, 13, 19, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (39, 13, 22, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (40, 14, 15, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (41, 14, 17, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (42, 14, 24, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (43, 15, 11, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (44, 15, 16, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (45, 15, 24, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (46, 16, 12, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (47, 16, 15, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (48, 16, 18, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (49, 17, 11, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (50, 17, 14, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (51, 17, 20, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (55, 19, 15, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (56, 19, 16, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (57, 19, 17, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (58, 20, 11, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (59, 20, 22, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (60, 20, 23, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (61, 21, 15, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (62, 21, 22, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (63, 21, 25, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (67, 23, 15, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (68, 23, 19, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (69, 23, 24, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (70, 24, 12, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (71, 24, 16, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (72, 24, 17, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (73, 25, 19, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (74, 25, 21, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (75, 25, 23, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (76, 26, 13, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (77, 26, 18, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (78, 26, 25, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (79, 27, 11, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (80, 27, 12, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (81, 27, 14, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (82, 28, 11, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (83, 28, 16, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (84, 28, 19, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (88, 30, 11, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (89, 30, 13, '2023-01-30 18:07:18', '2023-01-30 18:07:18');
INSERT INTO public.employee_courses VALUES (90, 30, 17, '2023-01-30 18:07:18', '2023-01-30 18:07:18');


--
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.migrations VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO public.migrations VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO public.migrations VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO public.migrations VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO public.migrations VALUES (5, '2023_01_14_113713_create_departments_table', 1);
INSERT INTO public.migrations VALUES (6, '2023_01_14_114239_create_positions_table', 1);
INSERT INTO public.migrations VALUES (7, '2023_01_28_080534_create_courses_table', 1);
INSERT INTO public.migrations VALUES (8, '2023_01_28_081712_create_employees_table', 1);
INSERT INTO public.migrations VALUES (9, '2023_01_28_083134_create_employee_courses_table', 1);


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Data for Name: personal_access_tokens; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: courses_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.courses_id_seq', 25, true);


--
-- Name: departments_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.departments_id_seq', 16, true);


--
-- Name: employee_courses_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.employee_courses_id_seq', 90, true);


--
-- Name: employees_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.employees_id_seq', 30, true);


--
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.migrations_id_seq', 9, true);


--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);


--
-- Name: positions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.positions_id_seq', 21, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 2, true);


--
-- PostgreSQL database dump complete
--

