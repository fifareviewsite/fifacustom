import React from 'react';
import { createRoot } from 'react-dom/client';
import '../../../scss/app.scss';
import '../../../scss/formation_contents.scss';
import '../../../scss/formation_no.scss';
import { Swiper, SwiperSlide } from 'swiper/react';
// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';
import { ConstructionRounded } from '@mui/icons-material';
//import Position from "../home/position";

// index.blade.phpのid="select_top"を読み込む

export default function formation_contents(props){
    
    const position = props.contents;
    console.log(position);
    return (
        <div className="box-row" >
                <SwiperSlide>
                    <div className="box-parent">
                        <div className="box">
                            <div className="box-content1">
                                <div className="box-title1">{props.title}</div>
                                <div className="text-parent">
                                    <div className="box-formation">{props.formation}</div>
                                    <div className="box-regist1">{props.create_date}</div>
                                </div>
                            </div>
                            <div className="box-content2">
                            {Object.keys(position).map(key => (
                            //各ポジションごとの位置調整及びセレクトボックスの個数の出しわけ
                                <div key={key} className={"box-select-" + props.formation + "-" + position[key].role}>
                                {position[key].five_flg
                                    ? <div>
                                        <p className="select-text-5">{position[key].select_1}</p>
                                        <p className="select-text-5">{position[key].select_2}</p>
                                        <p className="select-text-5">{position[key].select_3}</p>
                                        <p className="select-text-5">{position[key].select_4}</p>
                                        <p className="select-text-5">{position[key].select_5}</p>
                                    </div>
                                    : <div>
                                        <p className="select-text">{position[key].select_1}</p>
                                        <p className="select-text">{position[key].select_2}</p>
                                        <p className="select-text">{position[key].select_3}</p>
                                        <p className="select-text">{position[key].select_4}</p>
                                    </div>
                                }
                                </div>
                            ))}
                            </div>
                            <div className="parameter">
                                <div className="defense">
                                    <p className="defense-title">DEFENSE</p>
                                    <p className="defense-tac">バランス</p>
                                    <div className="graph-defense-parent">
                                        <div className="graph-defense">
                                            <span className="bar" style={{width: '100%'}}>幅：70</span>
                                        </div>
                                    </div>
                                    <div className="graph-defense-parent2">
                                        <div className="graph2-defense">
                                            <span className="bar" style={{width: '100%'}}>深さ：40</span>
                                        </div>
                                    </div>
                                </div>
                                <div className="offense">
                                    <p className="offense-title">OFFENSE</p>
                                    <p className="offense-tac1">高速ビルドアップ</p>
                                    <p className="offense-tac2">バランス</p>
                                    <div className="graph-offense-parent">
                                        <div className="graph-offense">
                                            <span className="bar" style={{width: '100%'}}>幅：70</span>
                                        </div>
                                    </div>
                                    <div className="graph-offense-parent2">
                                        <div className="graph2-offense">
                                            <span className="bar" style={{width: '100%'}}>深さ：40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </SwiperSlide>
        </div>
    );
  }