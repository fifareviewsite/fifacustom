import React, { useEffect, useState } from "react";
import { Link } from "react-router-dom";
import { Navigation, Autoplay, Pagination, Scrollbar, A11y } from 'swiper';
import { Swiper, SwiperSlide } from 'swiper/react';
import MediaQuery from "react-responsive";
// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';
import axios from "axios";
import '../../scss/trend.scss';

import Formatin_contents from "./home/formation_contents";
import Formatin_contents_1000 from "./home/formation_contents_1000";
import Formatin_contents_1600 from "./home/formation_contents_1600";
import Burger from "./header";
import Trend from "./home/trend";
import Trend_new from "./home/trend_new";
import MaterialHeader from "./Material_header";
export default function Home() {
  const [value,setValue] = useState([]);

  const url = "http://localhost:80/api/";

  useEffect(()=>{
    (async ()=>{
      try{
        const res = await axios.get(url);
        //console.log(res.data);
        setValue(res.data.data);
        return;
      }catch (e){
        return e;
      }
    })();
  },[]);

  return (
    <div>
      <div><MaterialHeader /></div>
      {/*<div><Burger /></div>*/}
      {/*<Link to="/page_a">PageA</Link>*/}
      <MediaQuery query="(max-width: 749px)">
        <Swiper
          // install Swiper modules
          modules={[Navigation, Pagination, Scrollbar, Autoplay]}
          spaceBetween={50}
          slidesPerView={1}
          pagination={{ clickable: true }}
          autoplay={false}
          >
          {value.map((formation,index) =>(
            <SwiperSlide key={index}>
              <Formatin_contents key={formation.id}{...formation}/>
            </SwiperSlide>
          ))}
        </Swiper>
        <h2>Trend (07/02~08/02)</h2>
        <Swiper
          // install Swiper modules
          modules={[Navigation, Pagination, Scrollbar, Autoplay]}
          spaceBetween={5}
          slidesPerView={1}
          pagination={{ clickable: true }}
          autoplay={false}
          >
          {value.map((formation,index) =>(
            <SwiperSlide key={index}>
              <Trend />
            </SwiperSlide>
          ))}
        </Swiper>
        <h2>New</h2>
        <Swiper
          // install Swiper modules
          modules={[Navigation, Pagination, Scrollbar, Autoplay]}
          spaceBetween={5}
          slidesPerView={1}
          pagination={{ clickable: true }}
          autoplay={false}
          >
          {value.map((formation,index) =>(
            <SwiperSlide key={index}>
              <Trend_new />
            </SwiperSlide>
          ))}
        </Swiper>
      </MediaQuery>
      <MediaQuery query="(min-width: 750px) and (max-width: 1000px)">
        <Swiper
          // install Swiper modules
          modules={[Navigation, Pagination, Scrollbar, Autoplay]}
          spaceBetween={50}
          slidesPerView={2}
          pagination={{ clickable: true }}
          autoplay={false}
          >
          {value.map((formation,index) =>(
            <SwiperSlide key={index}>
              <Formatin_contents key={formation.id}{...formation}/>
            </SwiperSlide>
          ))}
        </Swiper>
        <h2>Trend (07/02~08/02)</h2>
        <Swiper
          // install Swiper modules
          modules={[Navigation, Pagination, Scrollbar, Autoplay]}
          spaceBetween={5}
          slidesPerView={2}
          pagination={{ clickable: true }}
          autoplay={false}
          >
          {value.map((formation,index) =>(
            <SwiperSlide key={index}>
              <Trend />
            </SwiperSlide>
          ))}
        </Swiper>
        <h2>New</h2>
        <Swiper
          // install Swiper modules
          modules={[Navigation, Pagination, Scrollbar, Autoplay]}
          spaceBetween={5}
          slidesPerView={2}
          pagination={{ clickable: true }}
          autoplay={false}
          >
          {value.map((formation,index) =>(
            <SwiperSlide key={index}>
              <Trend_new />
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