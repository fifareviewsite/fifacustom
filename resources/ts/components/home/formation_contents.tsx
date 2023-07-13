import React from 'react';
import { createRoot } from 'react-dom/client';
import '../../../scss/app.scss';
import '../../../scss/formation_contents.scss';
import '../../../scss/formation_no.scss';
import { Navigation, Autoplay, Pagination, Scrollbar, A11y } from 'swiper';
import { Swiper, SwiperSlide } from 'swiper/react';
// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';
import { ConstructionRounded } from '@mui/icons-material';

// index.blade.phpのid="select_top"を読み込む

export default function formation_contents(props){

    return (
        <div className="box-row" >
                <SwiperSlide>
                    <div className="box-parent">
                        <div className="box">
                            <div className="box-content1">
                                <div className="box-title1">CF20連勝達成フォーメーション</div>
                                <div className="text-parent">
                                    <div className="box-formation">4-3-1-2</div>
                                    <div className="box-regist1">2022/10/21</div>
                                </div>
                            </div>
                            <div className="box-content2">
                                <div className={"box-select1-" + props.formation}>
                                    <p className="select-text">ワイドに開く</p>
                                    <p className="select-text">裏に抜ける</p>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">前線を張る</p>
                                </div>
                                <div className={"box-select2-" + props.formation}>
                                    <p className="select-text-5">ワイドに開く</p>
                                    <p className="select-text-5">裏に抜ける</p>
                                    <p className="select-text-5">前線にとどまる</p>
                                    <p className="select-text-5">攻撃時に上がらない</p>
                                    <p className="select-text-5">オーバーラップ</p>
                                </div>
                                <div className={"box-select3-" + props.formation}>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                </div>
                                <div className={"box-select4-" + props.formation}>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                </div>
                                <div className={"box-select5-" + props.formation}>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                </div>
                                <div className={"box-select6-" + props.formation}>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                </div>
                                <div className={"box-select7-" + props.formation}>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                </div>

                                <div className={"box-select8-" + props.formation}>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                </div>
                                <div className={"box-select9-" + props.formation}>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                </div>
                                <div className={"box-select10-" + props.formation}>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                    <p className="select-text">初期設定</p>
                                </div>
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