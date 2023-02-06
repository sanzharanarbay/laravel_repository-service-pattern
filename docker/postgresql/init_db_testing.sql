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

DROP DATABASE IF EXISTS laravel_repository_service_pattern_testing;
--
-- Name: laravel_repository_service_pattern_testing; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE laravel_repository_service_pattern_testing WITH TEMPLATE = template0 ENCODING = 'UTF8';


ALTER DATABASE laravel_repository_service_pattern_testing OWNER TO postgres;
