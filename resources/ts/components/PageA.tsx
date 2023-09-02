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

import Login from "./Login";
import MaterialHeader from "./Material_header";
export default function PageA() {

/*
  const numbers = [
    {
        id:1,
        formation:4312,
    },
    {
        id:2,
        formation:343,
        cbFlg:true
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
]*/
  return (
    <div>
      <div><MaterialHeader /></div>
      <Login />
      </div>
  );
}