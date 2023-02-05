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
-- Name: laravel_repository_service_pattern; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE laravel_repository_service_pattern WITH TEMPLATE = template0 ENCODING = 'UTF8';


ALTER DATABASE laravel_repository_service_pattern OWNER TO postgres;

\connect laravel_repository_service_pattern

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

INSERT INTO public.users VALUES (1, 'Default User', 'default.user@gmail.com', NULL, '$2y$10$lJGaWuZCsE3lw4s4w8dD3eIY0MYZB9mMGsCJdDg/xpEhQRYz/./qO', NULL, '2023-02-05 11:43:39', '2023-02-05 11:43:39');


--
-- Data for Name: courses; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.courses VALUES (1, 'ad', 'Possimus ipsum saepe odio sint tempora voluptas quia. Est consequatur commodi dolorem numquam aut culpa. Rerum at itaque placeat earum est facere.', 1, '2023-02-06', '2023-04-06', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (2, 'possimus', 'Ducimus quibusdam sequi nulla. Id accusamus non praesentium error voluptatem aspernatur. Accusamus harum ut rerum repudiandae repellat et dolore. Et totam impedit non omnis fugit ut repudiandae. Vel ratione vitae facere.', 1, '2023-02-11', '2023-03-13', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (3, 'natus', 'Ab aliquid sint officiis quas quia. Dolorem est repellendus voluptas ut vero. Et et nostrum inventore quia suscipit asperiores. Corporis nihil qui impedit reprehenderit animi. Nihil dolor iusto ut aut eaque.', 1, '2023-02-12', '2023-04-26', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (4, 'omnis', 'Cupiditate voluptatibus ut eveniet rerum quam voluptatem enim. Deserunt sit voluptatem nobis consequatur provident quos aut amet. Velit et aliquam dolorum et aliquid officiis quod. Voluptates asperiores rerum cum vitae et ut ipsam. Dolorem voluptatibus sunt assumenda debitis qui.', 2, '2023-02-10', '2023-02-19', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (5, 'et', 'Officiis consequatur aut officia dolorum expedita. Officia culpa sunt ut quia harum. Officia fuga quia repudiandae perferendis est.', 4, '2023-02-08', '2023-02-20', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (6, 'qui', 'Ipsa at eos consequatur quae saepe odio porro. Nam sunt quisquam omnis voluptates. Excepturi enim porro itaque nostrum culpa. Qui sint sed sint voluptas ratione.', 2, '2023-02-11', '2023-04-22', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (7, 'officia', 'Inventore dicta ratione quo. Laborum perferendis voluptatem corporis numquam modi. Autem ea in soluta sed aut aut. Nisi laudantium et aperiam voluptatem modi sunt.', 3, '2023-02-07', '2023-03-29', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (8, 'quos', 'Atque debitis dolore quia et non. Labore quisquam voluptatum doloremque repellendus corporis minus. Asperiores nihil voluptas deleniti. Libero molestiae porro optio consequuntur. Nam quos soluta tenetur quo accusamus nobis.', 3, '2023-02-08', '2023-03-29', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (9, 'ipsum', 'Omnis sunt molestiae et ut explicabo. Odit vel qui commodi exercitationem ullam debitis. Et vel est voluptatibus officiis quo est hic.', 5, '2023-02-11', '2023-04-01', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (10, 'quaerat', 'Repellat aut sint quod sunt. Quaerat voluptatum eaque reprehenderit in soluta. Ea quis et suscipit nisi qui. Numquam soluta velit quam quibusdam.', 5, '2023-02-09', '2023-02-22', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (11, 'cumque', 'Ea earum nulla qui veritatis dolore. Enim nam et temporibus dolorem. Atque cupiditate necessitatibus doloremque eaque vel. Occaecati magni maiores doloribus qui.', 4, '2023-02-08', '2023-04-10', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (12, 'iste', 'Velit maiores ducimus cum vel omnis incidunt quia. Excepturi aliquid cum aliquid blanditiis illum eum. Inventore est similique ab. Sunt voluptatem in amet ea accusamus voluptatem autem.', 1, '2023-02-11', '2023-03-03', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (13, 'veniam', 'Et ea quibusdam cupiditate assumenda qui. Necessitatibus est omnis aut laudantium omnis recusandae cum. Omnis id et ut nihil recusandae consequuntur.', 5, '2023-02-09', '2023-03-15', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (14, 'deleniti', 'Aut quis ullam non perferendis impedit enim numquam. Iusto eius architecto quibusdam minima cum commodi porro ea. Voluptatem voluptatem magnam voluptatibus enim. Sapiente quibusdam deserunt ab ipsam commodi est est consequatur.', 5, '2023-02-05', '2023-03-05', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (15, 'fugit', 'Nam veniam expedita reiciendis voluptatem. Voluptas accusantium fugiat quibusdam incidunt corrupti beatae. Aut corporis nihil et adipisci aut ut quae mollitia.', 6, '2023-02-06', '2023-02-26', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (16, 'velit', 'Ex debitis in sint non doloribus. Voluptas unde dolor qui dicta et ad. Distinctio nihil voluptate eum molestiae.', 4, '2023-02-07', '2023-03-24', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (17, 'consequatur', 'Nihil tempore quod nesciunt. Occaecati quasi autem aspernatur minus. Earum qui laudantium aspernatur voluptatem ab harum optio.', 4, '2023-02-06', '2023-03-27', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (18, 'odit', 'Porro quo qui consequatur ut est repudiandae. Libero recusandae sint ea sunt.', 2, '2023-02-12', '2023-03-15', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (19, 'doloremque', 'Ipsam nisi aut voluptatem accusamus possimus. Eos molestiae sed quam explicabo nihil vitae. Sed sed vitae ut in dolorem similique molestiae. Praesentium error consequatur dicta cumque. Nemo aliquid beatae ut iusto quasi voluptatem temporibus.', 4, '2023-02-06', '2023-04-02', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (20, 'ea', 'Qui et aut eum debitis delectus quaerat impedit. Maxime est velit hic exercitationem quidem error officiis. Necessitatibus omnis exercitationem vitae deleniti est dolor assumenda deserunt. Eligendi non quaerat reprehenderit dolorem eveniet deleniti eos.', 6, '2023-02-08', '2023-02-27', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (21, 'qui', 'Accusamus est et odio. Est expedita quasi sint ut ducimus. Quam delectus sequi eius recusandae. Libero ex pariatur consequuntur ad.', 6, '2023-02-10', '2023-04-26', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (22, 'et', 'Itaque minima accusamus et hic sit. A esse similique pariatur doloremque pariatur consectetur distinctio. Repellat qui veniam voluptate fuga. Vero consequatur nam voluptate qui excepturi maxime.', 4, '2023-02-06', '2023-04-27', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (23, 'deserunt', 'Eum dolores optio nulla aut quis veritatis et. Sed laboriosam laudantium nihil et eaque. Unde modi eius qui qui.', 1, '2023-02-08', '2023-03-02', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (24, 'enim', 'Aut consequuntur vel occaecati et cum. Consequatur quaerat in provident molestiae a. Et veniam est fugiat tempora occaecati. Fugiat nihil ea consequatur cumque et.', 6, '2023-02-09', '2023-04-14', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.courses VALUES (25, 'debitis', 'Nesciunt id aliquam quo ut et. Laudantium numquam aperiam temporibus. Sit omnis magni atque quo reiciendis officia. Dolores provident mollitia illum labore ut quia voluptatum.', 1, '2023-02-09', '2023-03-04', true, 1, '2023-02-05 11:43:39', '2023-02-05 11:43:39');


--
-- Data for Name: departments; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.departments VALUES (1, 'Runolfsdottir LLC', 'et', 0, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.departments VALUES (2, 'Schuppe, Schmitt and Trantow', 'a', 0, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.departments VALUES (3, 'Johns-Wintheiser', 'et', 0, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.departments VALUES (4, 'Spencer, Stiedemann and VonRueden', 'molestias', 0, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.departments VALUES (5, 'Larson-Tromp', 'nihil', 0, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.departments VALUES (6, 'Gusikowski Group', 'voluptates', 0, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.departments VALUES (7, 'Renner Inc', 'enim', 0, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.departments VALUES (8, 'Daniel-Raynor', 'molestiae', 0, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.departments VALUES (9, 'Turner-Gulgowski', 'consequatur', 0, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.departments VALUES (10, 'Beahan, Considine and Eichmann', 'quibusdam', 0, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.departments VALUES (11, 'Hermiston Inc', 'nobis', 0, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.departments VALUES (12, 'Roberts and Sons', 'voluptate', 0, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.departments VALUES (13, 'Daugherty, Smith and Tillman', 'optio', 0, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.departments VALUES (14, 'Towne and Sons', 'repellat', 0, '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.departments VALUES (15, 'Breitenberg, Prohaska and Gulgowski', 'ducimus', 0, '2023-02-05 11:43:39', '2023-02-05 11:43:39');


--
-- Data for Name: positions; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.positions VALUES (1, 'Gaming Dealer', 'nisi', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (2, 'Auxiliary Equipment Operator', 'maxime', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (3, 'Pantograph Engraver', 'voluptatem', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (4, 'Electrical and Electronics Drafter', 'quia', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (5, 'Social Scientists', 'quae', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (6, 'Set Designer', 'magnam', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (7, 'Pharmaceutical Sales Representative', 'omnis', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (8, 'Webmaster', 'voluptas', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (9, 'Human Resources Assistant', 'architecto', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (10, 'Hairdresser OR Cosmetologist', 'inventore', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (11, 'Statistician', 'provident', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (12, 'Mathematical Technician', 'laboriosam', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (13, 'Financial Specialist', 'modi', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (14, 'Respiratory Therapist', 'corporis', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (15, 'Poultry Cutter', 'dolores', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (16, 'Power Distributors OR Dispatcher', 'mollitia', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (17, 'Molding Machine Operator', 'est', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (18, 'Law Enforcement Teacher', 'quae', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (19, 'Office and Administrative Support Worker', 'deleniti', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.positions VALUES (20, 'Training Manager OR Development Manager', 'rerum', '2023-02-05 11:43:39', '2023-02-05 11:43:39');


--
-- Data for Name: employees; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.employees VALUES (1, 'Zachery Jast', '1969-09-04', true, 17, 7, '525 Neva Ford
North Eloisa, GA 34833', 53, '+18455107475', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (2, 'Else Hand', '1970-01-21', true, 17, 9, '64228 Reed Hollow
Keelingland, WV 98769-3785', 53, '+13804371465', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (3, 'Bernita Waters', '1986-10-23', true, 2, 2, '60459 Keara Pass Suite 843
East Kylee, WY 46793', 36, '+14235357117', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (4, 'Allan Kutch', '1990-02-10', true, 3, 3, '86135 Jaqueline Overpass Apt. 199
Lake Mariela, WV 70964-4630', 32, '+14587671963', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (5, 'Quentin Heidenreich', '1971-09-30', true, 3, 13, '371 McLaughlin Avenue
Kreigerport, VT 88400', 51, '+12142243422', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (6, 'Alan Klein', '1997-05-01', true, 15, 5, '16572 Homenick Island Apt. 328
Christiansenberg, NE 77283', 25, '+16695615186', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (7, 'Evan Moen', '2001-02-08', true, 20, 9, '13470 Meaghan Oval Apt. 139
Marleytown, MD 09185', 21, '+17438180794', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (8, 'Maximillia Barton', '2002-08-01', true, 14, 11, '813 Collier Place
Lake Verliechester, AK 78752-7703', 20, '+16062989646', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (9, 'Cameron Marvin', '1973-07-12', true, 7, 6, '142 Peter Run Suite 236
North Elijah, DE 25896-2924', 49, '+14237712091', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (10, 'Brannon Braun', '1992-05-20', true, 16, 7, '76611 Adams Roads Apt. 090
Parkershire, MN 20672-3763', 30, '+14782889091', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (11, 'Bettie Gottlieb', '1993-01-16', true, 1, 11, '2352 Alivia Streets Apt. 233
South Richard, AK 21891-0361', 30, '+18437341051', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (12, 'Rickie Bayer', '1991-10-21', true, 7, 10, '1702 Vella Prairie Apt. 951
East Emma, NC 15659-1684', 31, '+14584371533', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (13, 'Camylle Murazik', '1967-08-22', true, 4, 6, '59908 Romaguera Ramp Apt. 751
North Felipeport, SC 57049-7195', 55, '+19362344508', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (14, 'Abraham Wiza', '2002-09-17', true, 20, 12, '257 Dylan Avenue
Schillerborough, WY 07705-6295', 20, '+18285675179', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (15, 'Rosalind Hills', '1984-05-04', true, 12, 1, '329 Vito Inlet
Lake Eda, ND 94891-0982', 38, '+16606886122', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (16, 'Walton Zieme', '1964-05-16', true, 20, 14, '930 Conn Drives
Satterfieldton, NY 69897-8439', 58, '+17348376402', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (17, 'Dante Weissnat', '1975-10-21', true, 6, 14, '6185 Yundt Junction
New Natalia, MO 70437', 47, '+16679559469', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (18, 'Eliezer Hansen', '1979-11-26', true, 2, 6, '2502 Larue Station
Murraymouth, OR 74425', 43, '+15166557252', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (19, 'Rhett Pfeffer', '1986-02-20', true, 19, 9, '243 Kutch Fall
Trantowview, LA 81540-5114', 36, '+17372540449', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (20, 'Jedidiah Kuhic', '1988-03-09', true, 8, 5, '6882 Jennifer Mews
Olsonview, PA 78586', 34, '+15809948424', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (21, 'Floyd Cummings', '1971-09-29', true, 10, 8, '5946 Carter Plains Apt. 220
Gleasonfurt, NV 58454', 51, '+12489488201', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (22, 'Ransom McKenzie', '1982-02-04', true, 8, 13, '582 Layla Fork Suite 322
Daphneeview, CT 81158', 41, '+18599101841', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (23, 'Tito Carter', '1988-06-30', true, 6, 13, '7157 Hermina Ports
Candidaside, MO 71370', 34, '+17342701266', '2023-02-05 11:43:39', '2023-02-05 11:43:39');
INSERT INTO public.employees VALUES (24, 'Luna Walter', '1990-12-20', true, 17, 15, '684 Jayce Fall Suite 046
West Kadenberg, NH 15095', 32, '+17013316427', '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employees VALUES (25, 'Misael Ziemann', '1981-02-09', true, 20, 13, '4689 Trantow Courts Apt. 522
West Quincyville, KS 79224', 41, '+19256904360', '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employees VALUES (26, 'Zachery Medhurst', '1989-01-26', true, 17, 6, '6224 Mariah Wells
Kuhlmanland, FL 94004-6450', 34, '+12522502081', '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employees VALUES (27, 'Joshua Ledner', '1966-12-16', true, 13, 9, '9896 Camylle Mill
Flatleyhaven, VA 29324', 56, '+18065243715', '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employees VALUES (28, 'Tyrese Baumbach', '1978-12-07', true, 5, 3, '5659 Beahan Light Apt. 205
Traceyside, RI 35266', 44, '+14702665166', '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employees VALUES (30, 'Renee Langosh', '1973-06-04', true, 5, 1, '3532 Ortiz Vista Apt. 618
East Javontechester, AR 84048-4305', 49, '+13604091168', '2023-02-05 11:43:40', '2023-02-05 11:43:40');


--
-- Data for Name: employee_courses; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.employee_courses VALUES (1, 1, 12, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (2, 1, 14, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (3, 1, 24, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (4, 2, 21, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (5, 2, 23, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (6, 2, 24, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (7, 3, 15, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (8, 3, 17, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (9, 3, 23, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (10, 4, 17, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (11, 4, 20, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (12, 4, 22, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (13, 5, 12, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (14, 5, 22, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (15, 5, 23, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (16, 6, 12, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (17, 6, 13, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (18, 6, 16, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (19, 7, 13, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (20, 7, 18, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (21, 7, 22, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (22, 8, 11, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (23, 8, 14, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (24, 8, 16, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (25, 9, 12, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (26, 9, 18, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (27, 9, 24, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (28, 10, 12, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (29, 10, 18, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (30, 10, 23, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (31, 11, 20, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (32, 11, 22, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (33, 11, 24, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (34, 12, 14, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (35, 12, 16, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (36, 12, 19, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (37, 13, 16, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (38, 13, 18, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (39, 13, 25, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (40, 14, 15, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (41, 14, 22, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (42, 14, 25, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (43, 15, 11, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (44, 15, 18, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (45, 15, 20, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (46, 16, 13, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (47, 16, 18, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (48, 16, 24, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (49, 17, 15, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (50, 17, 20, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (51, 17, 21, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (52, 18, 14, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (53, 18, 21, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (54, 18, 24, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (55, 19, 16, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (56, 19, 20, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (57, 19, 22, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (58, 20, 13, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (59, 20, 15, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (60, 20, 19, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (61, 21, 11, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (62, 21, 12, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (63, 21, 23, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (64, 22, 11, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (65, 22, 23, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (66, 22, 25, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (67, 23, 12, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (68, 23, 18, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (69, 23, 19, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (70, 24, 18, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (71, 24, 19, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (72, 24, 21, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (73, 25, 11, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (74, 25, 12, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (75, 25, 15, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (76, 26, 11, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (77, 26, 13, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (78, 26, 15, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (79, 27, 11, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (80, 27, 13, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (81, 27, 15, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (82, 28, 11, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (83, 28, 17, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (84, 28, 25, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (88, 30, 19, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (89, 30, 20, '2023-02-05 11:43:40', '2023-02-05 11:43:40');
INSERT INTO public.employee_courses VALUES (90, 30, 23, '2023-02-05 11:43:40', '2023-02-05 11:43:40');


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

SELECT pg_catalog.setval('public.departments_id_seq', 15, true);


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

SELECT pg_catalog.setval('public.positions_id_seq', 20, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 1, true);


--
-- PostgreSQL database dump complete
--

