import React from "react";
import { Link } from "react-router-dom";
import Burger from "./header";
export default function PageA() {
  return (
    <div>
      <h1>PageA</h1>
      <Link to="/">Home</Link>
      <div><Burger /></div>
    </div>
  );
}