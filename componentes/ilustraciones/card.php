<?php

 function Card($nombreProducto,$precioProducto,$stock,$img)
 {
     $card= '
     
     <svg class="card-runa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 360.5 560.5">
     <defs>
       <style>
         .bbeb9543-b3e1-475d-82d7-e7160828a0ba {
           fill: #a20004;
         }
   
         .a4184cb1-bdff-4618-99eb-f05f64f0f1d0, .b27dd4f8-07c3-4800-a9e1-bd769fcde654, .b46fef17-b03f-45b1-a670-4d8ddeb8e2c8, .ba9b8bd5-2823-4bdc-b09e-5b29c4da7d9f, .f2952d2a-cf61-43d7-8365-d743de3d8967 {
           fill: #fff;
         }
   
         .eb6d63fd-9714-40d4-b934-447d4dd56488 {
           fill: #a97a00;
         }
   
         .b46fef17-b03f-45b1-a670-4d8ddeb8e2c8 {
           font-size: 24.6px;
         }
   
         .a4184cb1-bdff-4618-99eb-f05f64f0f1d0, .b46fef17-b03f-45b1-a670-4d8ddeb8e2c8, .b8e0d21d-b00d-4e92-aad7-91dae8f17c65, .ba9b8bd5-2823-4bdc-b09e-5b29c4da7d9f, .f2952d2a-cf61-43d7-8365-d743de3d8967 {
           font-family: Rockwell;
         }
   
         .b363e40a-2588-4bc9-9e4f-07044e7cdfa9 {
           letter-spacing: 0.02em;
         }
   
         .a4184cb1-bdff-4618-99eb-f05f64f0f1d0 {
           font-size: 21.34px;
         }
   
         .eb3a5ec9-3cec-405b-9c46-28587352a945 {
           letter-spacing: -0.02em;
         }
   
         .bae98715-d197-4084-9287-92ab0b0c3705 {
           letter-spacing: 0em;
         }
   
         .f2952d2a-cf61-43d7-8365-d743de3d8967 {
           font-size: 29.36px;
         }
   
         .fbaaea60-36ef-400c-a2db-430407945716 {
           font-size: 22px;
         }
   
         .b8e0d21d-b00d-4e92-aad7-91dae8f17c65 {
           font-size: 20px;
         }
   
         .af7eac3e-6ee8-42b2-97bb-8409e7154d30 {
           letter-spacing: -0.02em;
         }
   
         .ba9b8bd5-2823-4bdc-b09e-5b29c4da7d9f {
           font-size: 35.25px;
         }
   
         .b96a9961-b7d7-4609-9ba8-307641fb11f2 {
           fill: none;
           stroke: #a97a00;
           stroke-miterlimit: 10;
         }
       </style>
     </defs>
     <title>nuevo-card1</title>
     <g id="ad6c9658-69a4-45b8-9c66-354b060ec183" data-name="decoracion">
       <polygon class="bbeb9543-b3e1-475d-82d7-e7160828a0ba" points="360 72 0 72 0.5 0 360.5 0 360 72"/>
       <g>
         <polygon class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" points="30.44 54.95 28.67 56.84 30.44 58.73 32.21 56.84 30.44 54.95"/>
         <polygon class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" points="33.98 54.95 32.21 56.84 33.98 58.73 35.75 56.84 33.98 54.95"/>
         <polygon class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" points="37.52 54.95 35.75 56.84 37.52 58.73 39.29 56.84 37.52 54.95"/>
         <polygon class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" points="41.05 54.95 39.29 56.84 41.05 58.73 42.82 56.84 41.05 54.95"/>
         <polygon class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" points="44.59 54.95 42.82 56.84 44.59 58.73 46.36 56.84 44.59 54.95"/>
         <polygon class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" points="48.13 54.95 46.36 56.84 48.13 58.73 49.9 56.84 48.13 54.95"/>
         <path class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" d="M61.55,41.49l4-4.27-5.69-6.09-20.57-22-20.58,22L13,37.22l4,4.27-4,4.28,3.27,3.5L13,52.78l5.68,6.09,5.68-6.09-3.28-3.51,3.28-3.5-4-4.28,3.14-3.36L39.29,55,55,38.13l3.13,3.36-4,4.28,3.28,3.5-3.28,3.51,5.68,6.09,5.69-6.09-3.28-3.51,3.28-3.5Zm-22.26,11L24.73,36.86,39.29,21.27,53.84,36.86Z" transform="translate(0 -0.5)"/>
         <line class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" x1="39.29" y1="29.73" x2="39.29" y2="43.51"/>
         <line class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" x1="39.29" y1="46.33" x2="39.29" y2="48.59"/>
         <polyline class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" points="36.98 33.42 34.53 31.53 32.07 33.42"/>
         <polyline class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" points="46.5 33.42 44.04 31.53 41.59 33.42"/>
         <line class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" x1="36.58" y1="43.51" x2="42.14" y2="43.51"/>
         <line class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" x1="28.35" y1="36.36" x2="35.79" y2="36.36"/>
         <line class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" x1="28.35" y1="38.63" x2="35.79" y2="38.63"/>
         <line class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" x1="42.78" y1="36.32" x2="50.22" y2="36.32"/>
         <line class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" x1="42.78" y1="38.59" x2="50.22" y2="38.59"/>
         <polygon class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" points="49.95 6.5 47.63 8.99 47.63 15.78 49.95 18.26 52.27 15.78 52.27 8.99 49.95 6.5"/>
         <polyline class="b27dd4f8-07c3-4800-a9e1-bd769fcde654" points="47.63 9.41 49.95 11.33 52.27 9.41"/>
       </g>
     </g>
     <g id="f7a8d4a8-821a-48d8-bf84-c29ef178bc98" data-name="nombre-produto-contenedor">
       <rect class="eb6d63fd-9714-40d4-b934-447d4dd56488" y="95.5" width="360" height="38" rx="3"/>
       <g id="f376eb9b-b7d2-4ab7-ab13-5a3e8eed6fa6" data-name="nombre-producto">
         <text class="b46fef17-b03f-45b1-a670-4d8ddeb8e2c8" transform="translate(8 122.34)">'.$nombreProducto.'</text>
         <text class="a4184cb1-bdff-4618-99eb-f05f64f0f1d0" transform="translate(75.27 47.42)">CULTURAS COLOMBIA<tspan class="eb3a5ec9-3cec-405b-9c46-28587352a945" x="227.2" y="0">N</tspan><tspan class="bae98715-d197-4084-9287-92ab0b0c3705" x="242.22" y="0">AS</tspan></text>
       </g>
     </g>
     <g id="ffb877f9-7a32-41af-aafe-5fda59f11dfc" data-name="foto">
       <image width="1500" height="997" transform="translate(0 135.19) scale(0.24)" xlink:href="'.$img.'"/>
     </g>
     <g id="b06bdb22-845a-4857-a435-7fe1e2404acd" data-name="precio-contenedor">
       <rect class="eb6d63fd-9714-40d4-b934-447d4dd56488" x="17" y="378.5" width="327" height="47" rx="3"/>
       <g id="ad4d76db-9617-45bb-87e5-43b26b37884b" data-name="precio">
         <text class="f2952d2a-cf61-43d7-8365-d743de3d8967" transform="translate(82.4 410.15)">'.$precioProducto.'</text>
       </g>
     </g>
     <g id="a45c57d2-144a-445c-b238-a11c2d608501" data-name="stock">
       <text class="b8e0d21d-b00d-4e92-aad7-91dae8f17c65" transform="translate(28 455.68)">Stock disponible</text>
     </g>
     <g id="bf6e3394-ab34-4bf0-8222-b229a5452e61" data-name="nemero stock">
       <rect class="bbeb9543-b3e1-475d-82d7-e7160828a0ba" x="250" y="433.5" width="63" height="31"/>
       <text class="f2952d2a-cf61-43d7-8365-d743de3d8967" transform="translate(273.11 458.24)">'.$stock.'</text>
     </g>
     <g id="bf3eae1e-b5cd-4b49-bb1a-e78f482eed20" data-name="boton comprar">
       <rect class="bbeb9543-b3e1-475d-82d7-e7160828a0ba" x="17" y="488.5" width="326" height="59" rx="3"/>
       <text class="ba9b8bd5-2823-4bdc-b09e-5b29c4da7d9f" transform="translate(99.62 530.91)">COMPRAR</text>
       <line class="b96a9961-b7d7-4609-9ba8-307641fb11f2" x1="17" y1="475" x2="344" y2="475"/>
       <line class="b96a9961-b7d7-4609-9ba8-307641fb11f2" x1="17" y1="426" x2="344" y2="426"/>
     </g>
   </svg>
   
     
     
     
     
     ';

     return $card;
 }    

?>