import React from 'react';
import { createRoot } from 'react-dom/client';
import '../../../scss/app.scss';
import '../../../scss/formation_contents.scss';
import '../../../scss/formation_no.scss';

export default function position(props) {
console.log(props);
    if (props){
        Object.keys(props).forEach(keyX => {
            if(keyX == "position"){
                Object.keys(props[keyX]).forEach(keyY => {
                    return (
                            <div className={keyY + "-" +props.formation}>
                                <p className="select-text-5">ワイドに開く</p>
                                <p className="select-text-5">裏に抜ける</p>
                                <p className="select-text-5">前線にとどまる</p>
                                <p className="select-text-5">攻撃時に上がらない</p>
                                <p className="select-text-5">オーバーラップ</p>
                            </div>
                    )
                })
            }
        })
    }
}