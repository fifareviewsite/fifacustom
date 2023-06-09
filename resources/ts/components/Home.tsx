import React from "react";
import { Link } from "react-router-dom";
import { Navigation, Autoplay, Pagination, Scrollbar, A11y } from 'swiper';
import { Swiper, SwiperSlide } from 'swiper/react';
// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

import Formatin_contents from "./home/formation_contents";
import Burger from "./header";
export default function Home() {
  return (
    <div>
      <div><Burger /></div>
      {/*<Link to="/page_a">PageA</Link>*/}
      <Formatin_contents />
      <Formatin_contents />
    </div>
  );
}