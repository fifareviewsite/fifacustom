import React from 'react';
import { createRoot } from 'react-dom/client';

// index.blade.phpのid="app"を読み込む
const container = document.getElementById('app');
const container2 = document.getElementById('app2');
const root = createRoot(container!); // createRoot(container!) if you use TypeScript
const root2 = createRoot(container2!); // createRoot(container!) if you use TypeScript

root.render(
    <div className="text-red">
        Laravel React+Typescript環境
    </div>
);

root2.render(
    <div className="text-red">
        Laravel React+Typescript環境
    </div>
);