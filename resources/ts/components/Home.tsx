import React from "react";
import { Link } from "react-router-dom";
import { Navigation, Autoplay, Pagination, Scrollbar, A11y } from 'swiper';
import { Swiper, SwiperSlide } from 'swiper/react';
import MediaQuery from "react-responsive";
// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

import Formatin_contents from "./home/formation_contents";
import Formatin_contents_1000 from "./home/formation_contents_1000";
import Formatin_contents_1600 from "./home/formation_contents_1600";
import Burger from "./header";
export default function Home() {
  const numbers = [
    {
        id:1,
        formation:4312,
        cbFlg:true
    },
    {
        id:2,
        formation:4312,
        cbFlg:false
    },
    {
        id:3,
        formation:4312,
        cbFlg:false
    },
    {
        id:4,
        formation:4312,
        cbFlg:false
    },
]
  return (
    <div>
      <div><Burger /></div>
      {/*<Link to="/page_a">PageA</Link>*/}
      <MediaQuery query="(max-width: 999px)">
        <Swiper
          // install Swiper modules
          modules={[Navigation, Pagination, Scrollbar, Autoplay]}
          spaceBetween={50}
          slidesPerView={1}
          pagination={{ clickable: true }}
          autoplay={false}
          >
          {numbers.map((number) =>(
            <SwiperSlide>
              <Formatin_contents key={number.id}{...number}/>
            </SwiperSlide>
          ))}
        </Swiper>
      </MediaQuery>
      <MediaQuery query="(min-width: 1000px) and (max-width: 1599px)">
        <Formatin_contents_1000 />
      </MediaQuery>
      <MediaQuery query="(min-width: 1600px)">
        <Formatin_contents_1600 />
      </MediaQuery>
    </div>
  );
}