import * as React from 'react';
import Card from '@mui/material/Card';
import CardActions from '@mui/material/CardActions';
import CardContent from '@mui/material/CardContent';
import CardMedia from '@mui/material/CardMedia';
import Button from '@mui/material/Button';
import Typography from '@mui/material/Typography';
import '../../../scss/trend.scss';

export default function Trend_new() {
  return (
    <div>
        <div id="cardlayout-wrap">
            <section className="card-list-new">
                <a className="card-link" href="#">
                    <h2 className="card-title-formation">4-2-3-1</h2>
                    <h2 className="card-title-name">CF20連勝達成フォーメーション</h2>
                    <p className="card-text-tax">攻めを意識したフォーメーション</p>
                </a>
            </section>
        </div>
    </div>
  );
}