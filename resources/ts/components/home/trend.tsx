import * as React from 'react';
import Card from '@mui/material/Card';
import CardActions from '@mui/material/CardActions';
import CardContent from '@mui/material/CardContent';
import CardMedia from '@mui/material/CardMedia';
import Button from '@mui/material/Button';
import Typography from '@mui/material/Typography';
import '../../../scss/trend.scss';

export default function Trend() {
  return (
    <div>
        <div id="cardlayout-wrap">
            <section className="card-list">
                <a className="card-link" href="#">
                    <figure className="card-figure"><img src="/images/demo.png" /></figure>
                    <h2 className="card-title">4-2-3-1</h2>
                    <p className="card-text-tax">Flexboxとcale()を使ってかんたんにレスポンシブ対応カードレイアウトをつくる手順のご紹介</p>
                </a>
            </section>
        </div>
    </div>
  );
}