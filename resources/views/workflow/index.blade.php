@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top: 12%; margin-left: 8%;">
        <div class="col">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="1291" height="524" viewBox="-0.5 -0.5 1291 524" content="&lt;mxfile host=&quot;app.diagrams.net&quot; modified=&quot;2020-09-06T18:15:49.977Z&quot; agent=&quot;5.0 (Macintosh)&quot; etag=&quot;rUyrM-SKfYrfw86UoH-f&quot; version=&quot;13.6.6&quot; type=&quot;device&quot;&gt;&lt;diagram id=&quot;C5RBs43oDa-KdzZeNtuy&quot; name=&quot;Page-1&quot;&gt;7V1bc+I2FP41zGwfksGWr4+EwHbbbCebtLubvilYgBpjscIkJL++si3hi7iYBCN7MJlJkCzLlo7Od46OPikd0J+tPlM4n34lHvI7etdbdcB1R9c13XXYnyjnNclxbC3JmFDsJVndNOMevyF+p8hdYg8teF6SFRLih3iezxyRIECjMJcHKSUv+WJj4nu5jDmcoNxrRBn3I+gjqdgP7IVT3grdTvN/R3gy5U82HZBceISjpwkly4A/LiABSq7MoKiFP3ExhR55yTwODDqgTwkJk2+zVR/5Ua+KDvvx5fWHf/Nkff7j2+IX/Ofqz7//+n6RVDY85JZ12ygKwndX3fvymd6HX/99mz1Zvjca37oPwwvN5G0LX0VPIo91LE8SGk7JhATQH6S5V3F3oajaLkulZW4ImbNMjWX+h8LwlY8SuAwJy5qGM59fZc2grz/5/XHiIUpcmiJ5vcpevH7lqTEJQl6pZvB0n/iExm8OuuwDAMtP2hQ1pDA49nQgL7cgSzpCO3qND4gQ0gkKd/XuepQwvUNkhlhj2H0U+TDEz/mXg1wBJutyqSzZFy7OA0TLX/IZ+kv+pEH/TpL2IqTkaa0yWl5ObMTPo3Kz1SRCjcuxT15GU0jDSwYfkEnl6mWKQ3Q/h3F3vbBCkVSw72ekAoDZHw5laQ3jT/QUdjsOJixX3yBj3gpEQ7R6hzTl3he18P7heGdxRXhJwcPmJaYZ3ADdiqQFXLWKmOreQ0716q2IwtLsU0RdpSIaXRWibZqIwAdFFN/aoxS+ZgrMCQ7CRabm2ygjAwKOmUMBzSzY0EJ53d5Znn1J3iAdLOumvH/8aBKQd3TLZ3155eHn3Liyfi0jZySW9cUiFn6PFdCM+SqWtLjOvk34X1+U/1BFg8UcjfAYj2CnDzo9O/p9ZTJ/kD+AtTt5Rv65LDtuQj63Nq26ZYMPz3DAVGHdkkd6lHcr2SEF2EhBQdtie7PGO7bsGZW34s/6StbmS2CRN+FjM/qRQST5VGmkQd5Km7KV1rQNZtqszEyD1kwfbgP0kjbAUGmmdQlmb30YkGhOzGaE3T7rO0p8JNK3lCl2BHOAzXFJq6o6yFtG15JVVT+lqhpGq6qHqyooqaqaUl0FlblEvSD2YDQfL2JVJ58Wv1XrrgwJDdAIeYR+QumzjudntA5FFqW0ggO/CaZO6lFomiSVFqb2wpRREqZMlShlSCh1T3w8wmFmltQDsYcR/bohYQQ58ng4Py11ckoKrK5qt1+xL9FpZJjcbIQvYUpaqqXaeO6aCPKaaAJZE91ThskNWVp/rWG0PmZUO5KGohUOf4r62PeM/rNUWnmUEHVXrdVaWdurOSrV2nFl64tnTYLxOHWLKGYdgug7R046Wh4y46jmI0dXahA02W+rXWj6Di2Wfgg90vAQe2+EcJjMuJ8RZpIc1iPQPiWzx+XiyDZ+h03fodInnxODbsk5sVuZlVc7J14njutub4bkNQqrgWSnrDH/ICK/a3kWFJdnXTc7tvaWd06xOutUZi164RL6+E1aU+2iatG9TyhFmxdy27BkNdMs09k40NVFPEQIphmucl0iHnppD9dW6eHqsoc7uL6TBH623EAg4n0i7CHqVcUONJTQDmqjVXZJrQJKCbfiNbd5ApxUlCUVZM1q6XmbMNI5PkLJu75FHoUH0zv2P/ncbbNp6Xkw0FSvRhiWWttcTayzchRxm4Eictzy4GiLztxvyfe+RgsUPBP/Gc9Yh8YQBNmvIWJzoigHRu8tocLg1xLPIb9jS0jl3BHC7hZYiuoRola7CZqCEKAsV91Q6r2bSvYTnI9wlS5bidc8kDSityhsFSZt6lkjpiyVVlH3U7vKzvZMpX6aIc/29JY3sp40OfmA5noTdUYZnQ26aFSmi7XauNEYXSy7PKRYF/eswfDlFGkd5YDAyXdEC/vbYiPcBlFKTpG0/XiwiUhWHR7IQ6aORLKm8LHNst61qZTa4yr2yDoHrWp9iABWG4knbrgyMldXZoxu4wHewEfk50UHfTwJ2PcR67RIBFcRNDIz4Pf4hRn2vGSUoAV+g49xfZGcOLeBVW5edczrgyW3AYP52Tn8IZ3MUTipTHcM+63gfNG9NIzC/j1Biz6M4JEyMkQRMh4v2PAoivEIxAtTninXjt7W0vRaml5V8Q2xv1UZS89VvXNNb6ar1AyOiFkdC7rltZ3LtM+wCtRiQ/V2W8du0gygLpglQun7nf0tnuZpMEu8Zgazvg3uJIGfLa/NKbgQtuxCnJTW5p41rU3wivYr1UfPRvuYkJTsfW6ekJQGtsRr7o6Ax+y/rVHsvTHweME5Pa6kjX6XP2tUnKYs5m6q6f2u4nN/mxnltsqejmQpnbq5ivmhDfVxSwtXKUHI2nP2VYK5uzhDJdGeM4tAC/NlYd518jxQTTkDyVW8i6uhMF82QqcYCfZE6Oqw3+QrDJZjGC4pbGGktLeoFbzFGuBIrfjkjcGRskxGW23UTGYygpbJuM2o6yJope7EyA1HBJ5TRKYsJ1GxVp2Akxjv5WwZicexsnVQbDmKp5KUWBeNt8vGYG2lx71q3Q0Hvqo+cq4az6mO5xKWHiWO0uUUW9bx2tG9WtpaS1s73tpHwYEGgjemjLimdRVvBuo0MkBulz3P+cPr1fGthx4W5xaOMTSBmR0pe8uL/wVW6WlxtsxGb1l1LavuwJBE4bQ49edNOKUWpb6EaBbFlfAjovCAlSjWXdFJJbeUeMs6zHYd/RG8b8h4JnI8o9JZrVM4ukwraW3fMTZYMv3vxwlCpv9cGgz+Bw==&lt;/diagram&gt;&lt;/mxfile&gt;">
                <defs>
                    <filter id="dropShadow">
                        <feGaussianBlur in="SourceAlpha" stdDeviation="1.7" result="blur"/>
                        <feOffset in="blur" dx="3" dy="3" result="offsetBlur"/>
                        <feFlood flood-color="#3D4574" flood-opacity="0.4" result="offsetColor"/>
                        <feComposite in="offsetColor" in2="offsetBlur" operator="in" result="offsetBlur"/>
                        <feBlend in="SourceGraphic" in2="offsetBlur"/>
                    </filter>
                </defs>
                <g filter="url(#dropShadow)">
                    <path d="M 70 36 L 113.63 36" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 118.88 36 L 111.88 39.5 L 113.63 36 L 111.88 32.5 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <path d="M 0 23.5 C 0 22.12 1.59 21 3.56 21 L 56.28 21 C 64.64 23.69 70 29.55 70 36 C 70 42.45 64.64 48.31 56.28 51 L 3.56 51 C 1.59 51 0 49.88 0 48.5 L 0 23.5 Z" fill="#335cff" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <g transform="translate(-0.5 -0.5)">
                        <switch>
                            <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                <div
                                    xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 68px; height: 1px; padding-top: 36px; margin-left: 1px;">
                                    <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                        <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #FFFFFF; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">ECR</div>
                                    </div>
                                </div>
                            </foreignObject>
                            <text x="35" y="40" fill="#FFFFFF" font-family="Helvetica" font-size="14px" text-anchor="middle">ECR</text>
                        </switch>
                    </g>
                    <path d="M 175 61 L 175 106.5 L 73 106.5 L 73 145.63" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 73 150.88 L 69.5 143.88 L 73 145.63 L 76.5 143.88 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <path d="M 175 61 L 175 106 L 265 106 L 265 145.63" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 265 150.88 L 261.5 143.88 L 265 145.63 L 268.5 143.88 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="120" y="11" width="110" height="50" rx="7.5" ry="7.5" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="especificacoes_preliminares"/>
                    <a href="" id="especificacoes_preliminares_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml"
                                        style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 36px; margin-left: 121px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">
                                                <div style="font-size: 14px">
                                                    <font style="font-size: 14px">Especificações</font>
                                                </div>
                                                <div style="font-size: 14px">
                                                    <font style="font-size: 14px">Preliminares
                                                        <br style="font-size: 14px" />
                                                    </font>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="175" y="40" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Especificações...</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 73 202 L 73 309.63" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 73 314.88 L 69.5 307.88 L 73 309.63 L 76.5 307.88 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="13" y="152" width="120" height="50" rx="7.5" ry="7.5" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="plano_de_controle_de_prototipo"/>
                    <a href="" id="plano_de_controle_de_prototipo_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 118px; height: 1px; padding-top: 177px; margin-left: 14px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">Plano de Controle de Protótipo</div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="73" y="181" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Plano de Controle...</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 260 202 L 260 255.63" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 260 260.88 L 256.5 253.88 L 260 255.63 L 263.5 253.88 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="205" y="152" width="110" height="50" rx="7.5" ry="7.5" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="analise_do_fornecedor"/>
                    <a href="" id="analise_do_fornecedor_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 177px; margin-left: 206px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">
                                                <div style="font-size: 14px">Análise do(s)</div>
                                                <div style="font-size: 14px">Fornecedor(es)
                                                    <br style="font-size: 14px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="260" y="181" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Análise do(s)...</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 73 366 L 73 479.63" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 73 484.88 L 69.5 477.88 L 73 479.63 L 76.5 477.88 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="18" y="316" width="110" height="50" rx="7.5" ry="7.5" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="solicitacao_do_lote_1" />
                    <a href="" id="solicitacao_do_lote_1_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 341px; margin-left: 19px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">Solicitação do Lote 1</div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="73" y="345" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Solicitação do L...</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 118 501 L 161.5 501 L 161.5 307 L 198.63 307" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 203.88 307 L 196.88 310.5 L 198.63 307 L 196.88 303.5 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="28" y="486" width="90" height="30" rx="4.5" ry="4.5" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="lote_1"/>
                    <a href="" id="lote_1_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 88px; height: 1px; padding-top: 501px; margin-left: 29px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">1o Lote</div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="73" y="505" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">1o Lote</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 315 307 L 403 307 L 403 211.37" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 403 206.12 L 406.5 213.12 L 403 211.37 L 399.5 213.12 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <g transform="translate(-0.5 -0.5)">
                        <switch>
                            <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                <div
                                    xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 1px; height: 1px; padding-top: 300px; margin-left: 403px;">
                                    <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                        <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #000033; line-height: 1.2; pointer-events: all; background-color: #ffffff; white-space: nowrap; ">Não</div>
                                    </div>
                                </div>
                            </foreignObject>
                            <text x="403" y="304" fill="#000033" font-family="Helvetica" font-size="14px" text-anchor="middle">Não</text>
                        </switch>
                    </g>
                    <path d="M 260 352 L 260 492 L 317.63 492" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 322.88 492 L 315.88 495.5 L 317.63 492 L 315.88 488.5 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <g transform="translate(-0.5 -0.5)">
                        <switch>
                            <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                <div
                                    xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 1px; height: 1px; padding-top: 454px; margin-left: 260px;">
                                    <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                        <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #000033; line-height: 1.2; pointer-events: all; background-color: #ffffff; white-space: nowrap; ">Sim</div>
                                    </div>
                                </div>
                            </foreignObject>
                            <text x="260" y="458" fill="#000033" font-family="Helvetica" font-size="14px" text-anchor="middle">Sim</text>
                        </switch>
                    </g>
                    <path d="M 260 262 L 315 307 L 260 352 L 205 307 Z" fill="#f5f5f5" stroke="#666666" stroke-miterlimit="10" pointer-events="all" id="resultados_aceitaveis_ecr"/>
                    <a href="" id="resultados_aceitaveis_ecr_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 307px; margin-left: 206px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">
                                                <div style="font-size: 14px">
                                                    <font style="font-size: 14px">Resultados</font>
                                                </div>
                                                <div style="font-size: 14px">
                                                    <font style="font-size: 14px">Aceitáveis?
                                                        <br style="font-size: 14px" />
                                                    </font>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="260" y="311" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Resultados...</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 403 155 L 375 155 L 375 36 L 236.37 36" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 231.12 36 L 238.12 32.5 L 236.37 36 L 238.12 39.5 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="348" y="155" width="110" height="50" rx="7.5" ry="7.5" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="atualizacoes_e_correcoes_ecr"/>
                    <a href="" id="atualizacoes_e_correcoes_ecr_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 180px; margin-left: 349px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">
                                                <div style="font-size: 14px">Atualizações e</div>
                                                <div style="font-size: 14px">Correções
                                                    <br style="font-size: 14px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="403" y="184" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Atualizações e...</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 394 492 L 473 492 L 473 491 L 545.63 491" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 550.88 491 L 543.88 494.5 L 545.63 491 L 543.88 487.5 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <path d="M 324 479.5 C 324 478.12 325.59 477 327.56 477 L 380.28 477 C 388.64 479.69 394 485.55 394 492 C 394 498.45 388.64 504.31 380.28 507 L 327.56 507 C 325.59 507 324 505.88 324 504.5 L 324 479.5 Z" fill="#335cff" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <g transform="translate(-0.5 -0.5)">
                        <switch>
                            <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                <div
                                    xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 68px; height: 1px; padding-top: 492px; margin-left: 325px;">
                                    <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                        <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #FFFFFF; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">EDR</div>
                                    </div>
                                </div>
                            </foreignObject>
                            <text x="359" y="496" fill="#FFFFFF" font-family="Helvetica" font-size="14px" text-anchor="middle">EDR</text>
                        </switch>
                    </g>
                    <path d="M 607 466 L 607 416 L 679 416 L 679 372.37" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 679 367.12 L 682.5 374.12 L 679 372.37 L 675.5 374.12 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="552" y="466" width="110" height="50" rx="7.5" ry="7.5" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="plano_de_controle_de_qualidade"/>
                    <a href="" id="plano_de_controle_de_qualidade_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 491px; margin-left: 553px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">
                                                <div>Plano de
                                                    <br />
                                                </div>
                                                <div>Controle de</div>
                                                <div>Qualidade
                                                    <br />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="607" y="495" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Plano de...</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 745 466 L 745 416 L 679 416 L 679 372.37" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 679 367.12 L 682.5 374.12 L 679 372.37 L 675.5 374.12 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="690" y="466" width="110" height="50" rx="7.5" ry="7.5" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="desenvolvimentp_da_ferramenta"/>
                    <a href="" id="desenvolvimentp_da_ferramenta_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 491px; margin-left: 691px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">
                                                <font style="font-size: 12px">Desenvolvimento da Ferramenta/
                                                    <br />Equipamento
                                                </font>
                                            </div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="745" y="495" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Desenvolvimento...</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 679 316 L 679 266 L 618 266 L 618 222.37" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 618 217.12 L 621.5 224.12 L 618 222.37 L 614.5 224.12 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <path d="M 679 316 L 679 266 L 753 266 L 753 222.37" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 753 217.12 L 756.5 224.12 L 753 222.37 L 749.5 224.12 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="624" y="316" width="110" height="50" rx="7.5" ry="7.5" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="solicitacao_do_lote_2"/>
                    <a href="" id="solicitacao_do_lote_2_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 341px; margin-left: 625px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">Solicitação do Lote 2</div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="679" y="345" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Solicitação do L...</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 618 176 L 618 133 L 679 133 L 679 96.37" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 679 91.12 L 682.5 98.12 L 679 96.37 L 675.5 98.12 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="578" y="176" width="80" height="40" rx="6" ry="6" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="lote_2"/>
                    <a href="" id="lote_2_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 78px; height: 1px; padding-top: 196px; margin-left: 579px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">2o Lote</div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="618" y="200" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">2o Lote</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 753 176 L 753 133 L 679 133 L 679 96.37" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 679 91.12 L 682.5 98.12 L 679 96.37 L 675.5 98.12 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="708" y="176" width="90" height="40" rx="6" ry="6" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="acoes_de_verificacao"/>
                    <a href="" id="acoes_de_verificacao_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 88px; height: 1px; padding-top: 196px; margin-left: 709px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">
                                                <div>Ações de</div>
                                                <div>Verificação
                                                    <br />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="753" y="200" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Ações de...</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 624 45 L 510 45 L 510 295.63" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 510 300.88 L 506.5 293.88 L 510 295.63 L 513.5 293.88 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <g transform="translate(-0.5 -0.5)">
                        <switch>
                            <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                <div
                                    xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 1px; height: 1px; padding-top: 117px; margin-left: 510px;">
                                    <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                        <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #000033; line-height: 1.2; pointer-events: all; background-color: #ffffff; white-space: nowrap; ">Não</div>
                                    </div>
                                </div>
                            </foreignObject>
                            <text x="510" y="121" fill="#000033" font-family="Helvetica" font-size="14px" text-anchor="middle">Não</text>
                        </switch>
                    </g>
                    <path d="M 734 45 L 817.63 45" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 822.88 45 L 815.88 48.5 L 817.63 45 L 815.88 41.5 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <g transform="translate(-0.5 -0.5)">
                        <switch>
                            <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                <div
                                    xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 1px; height: 1px; padding-top: 51px; margin-left: 760px;">
                                    <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                        <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #000033; line-height: 1.2; pointer-events: all; background-color: #ffffff; white-space: nowrap; ">Sim</div>
                                    </div>
                                </div>
                            </foreignObject>
                            <text x="760" y="55" fill="#000033" font-family="Helvetica" font-size="14px" text-anchor="middle">Sim</text>
                        </switch>
                    </g>
                    <path d="M 679 0 L 734 45 L 679 90 L 624 45 Z" fill="#f5f5f5" stroke="#666666" stroke-miterlimit="10" pointer-events="all" id="resultados_aceitaveis_edr"/>
                    <a href="" id="resultados_aceitaveis_edr_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 45px; margin-left: 625px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">
                                                <div style="font-size: 14px">
                                                    <font style="font-size: 14px">Resultados</font>
                                                </div>
                                                <div style="font-size: 14px">
                                                    <font style="font-size: 14px">Aceitáveis?
                                                        <br style="font-size: 14px" />
                                                    </font>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="679" y="49" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Resultados...</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 510 352 L 510 409 L 579.5 409 L 579.5 459.63" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 579.5 464.88 L 576 457.88 L 579.5 459.63 L 583 457.88 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="455" y="302" width="110" height="50" rx="7.5" ry="7.5" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="atualizacoes_e_correcoes_edr"/>
                    <a href="" id="atualizacoes_e_correcoes_edr_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 327px; margin-left: 456px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">
                                                <div style="font-size: 14px">Atualizações e</div>
                                                <div style="font-size: 14px">Correções
                                                    <br style="font-size: 14px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="510" y="331" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Atualizações e...</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 894 45 L 977.5 45 L 977.5 30 L 1054.63 30" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 1059.88 30 L 1052.88 33.5 L 1054.63 30 L 1052.88 26.5 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <path d="M 824 32.5 C 824 31.12 825.59 30 827.56 30 L 880.28 30 C 888.64 32.69 894 38.55 894 45 C 894 51.45 888.64 57.31 880.28 60 L 827.56 60 C 825.59 60 824 58.88 824 57.5 L 824 32.5 Z" fill="#335cff" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <g transform="translate(-0.5 -0.5)">
                        <switch>
                            <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                <div
                                    xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 68px; height: 1px; padding-top: 45px; margin-left: 825px;">
                                    <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                        <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #FFFFFF; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">QER</div>
                                    </div>
                                </div>
                            </foreignObject>
                            <text x="859" y="49" fill="#FFFFFF" font-family="Helvetica" font-size="14px" text-anchor="middle">QER</text>
                        </switch>
                    </g>
                    <path d="M 1116 55 L 1116 85.5 L 1025 85.5 L 1025 109.63" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 1025 114.88 L 1021.5 107.88 L 1025 109.63 L 1028.5 107.88 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <path d="M 1116 55 L 1116 85.5 L 1216 85.5 L 1216 109.63" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 1216 114.88 L 1212.5 107.88 L 1216 109.63 L 1219.5 107.88 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="1061" y="5" width="110" height="50" rx="7.5" ry="7.5" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="qualificacao_do_fornecedor"/>
                    <a href="" id="qualificacao_do_fornecedor_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 30px; margin-left: 1062px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">
                                                <div>Qualificação</div>
                                                <div>do Fornecedor
                                                    <br />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="1116" y="34" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Qualificação...</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 1025 166 L 1025 242.63" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 1025 247.88 L 1021.5 240.88 L 1025 242.63 L 1028.5 240.88 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <path d="M 1080 141 L 1120.5 141 L 1120.5 274 L 1154.63 274" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 1159.88 274 L 1152.88 277.5 L 1154.63 274 L 1152.88 270.5 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="970" y="116" width="110" height="50" rx="7.5" ry="7.5" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="solicitacao_do_lote_3"/>
                    <a href="" id="solicitacao_do_lote_3_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 141px; margin-left: 971px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">
                                                <div>Solicitação do</div>
                                                <div>Lote 3
                                                    <br />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="1025" y="145" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Solicitação do...</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 1216 166 L 1216 242.63" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 1216 247.88 L 1212.5 240.88 L 1216 242.63 L 1219.5 240.88 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="1161" y="116" width="110" height="50" rx="7.5" ry="7.5" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="plano_de_controle_de_manufatura"/>
                    <a href="" id="plano_de_controle_de_manufatura_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 141px; margin-left: 1162px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">
                                                <div>Plano de
                                                    <br />
                                                </div>
                                                <div>Controle de</div>
                                                <div>Manufatura
                                                    <br />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="1216" y="145" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Plano de...</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 1025 299 L 1025 323 L 1125 323 L 1125 340.63" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 1125 345.88 L 1121.5 338.88 L 1125 340.63 L 1128.5 338.88 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="970" y="249" width="110" height="50" rx="7.5" ry="7.5" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="lote_3"/>
                    <a href="" id="lote_3_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 274px; margin-left: 971px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">3o Lote</div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="1025" y="278" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">3o Lote</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 1216 299 L 1216 323 L 1125 323 L 1125 340.63" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 1125 345.88 L 1121.5 338.88 L 1125 340.63 L 1128.5 338.88 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="1161" y="249" width="110" height="50" rx="7.5" ry="7.5" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="acoes_de_validacao"/>
                    <a href="" id="acoes_de_validacao_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 274px; margin-left: 1162px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">
                                                <div>Ações de</div>
                                                <div>Validação
                                                    <br />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="1216" y="278" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Ações de...</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 1070 392 L 1003 392 L 1003 459.63" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 1003 464.88 L 999.5 457.88 L 1003 459.63 L 1006.5 457.88 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <g transform="translate(-0.5 -0.5)">
                        <switch>
                            <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                <div
                                    xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 1px; height: 1px; padding-top: 396px; margin-left: 1003px;">
                                    <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                        <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #000033; line-height: 1.2; pointer-events: all; background-color: #ffffff; white-space: nowrap; ">Não</div>
                                    </div>
                                </div>
                            </foreignObject>
                            <text x="1003" y="400" fill="#000033" font-family="Helvetica" font-size="14px" text-anchor="middle">Não</text>
                        </switch>
                    </g>
                    <path d="M 1180 392 L 1229 392 L 1229 460.63" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 1229 465.88 L 1225.5 458.88 L 1229 460.63 L 1232.5 458.88 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <g transform="translate(-0.5 -0.5)">
                        <switch>
                            <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                <div
                                    xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 1px; height: 1px; padding-top: 405px; margin-left: 1229px;">
                                    <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                        <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #000033; line-height: 1.2; pointer-events: all; background-color: #ffffff; white-space: nowrap; ">Sim</div>
                                    </div>
                                </div>
                            </foreignObject>
                            <text x="1229" y="409" fill="#000033" font-family="Helvetica" font-size="14px" text-anchor="middle">Sim</text>
                        </switch>
                    </g>
                    <path d="M 1125 347 L 1180 392 L 1125 437 L 1070 392 Z" fill="#f5f5f5" stroke="#666666" stroke-miterlimit="10" pointer-events="all" id="resultados_aceitaveis_qer"/>
                    <a href="" id="resultados_aceitaveis_qer_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 392px; margin-left: 1071px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">
                                                <div style="font-size: 14px">
                                                    <font style="font-size: 14px">Resultados</font>
                                                </div>
                                                <div style="font-size: 14px">
                                                    <font style="font-size: 14px">Aceitáveis?
                                                        <br style="font-size: 14px" />
                                                    </font>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="1125" y="396" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Resultados...</text>
                            </switch>
                        </g>
                    </a>
                    <path d="M 948 491 L 905 491 L 905 141 L 963.63 141" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
                    <path d="M 968.88 141 L 961.88 144.5 L 963.63 141 L 961.88 137.5 Z" fill="#000000" stroke="#000000" stroke-miterlimit="10" pointer-events="all"/>
                    <rect x="948" y="466" width="110" height="50" rx="7.5" ry="7.5" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="atualizacoes_e_correcoes_qer"/>
                    <a href="" id="atualizacoes_e_correcoes_qer_link">
                        <g transform="translate(-0.5 -0.5)">
                            <switch>
                                <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                    <div
                                        xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 491px; margin-left: 949px;">
                                        <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                            <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #333333; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">
                                                <div style="font-size: 14px">Atualizações e</div>
                                                <div style="font-size: 14px">Correções
                                                    <br style="font-size: 14px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </foreignObject>
                                <text x="1003" y="495" fill="#333333" font-family="Helvetica" font-size="14px" text-anchor="middle">Atualizações e...</text>
                            </switch>
                        </g>
                    </a>
                    <rect x="1174" y="467" width="110" height="50" rx="7.5" ry="7.5" fill="#f5f5f5" stroke="#666666" pointer-events="all" id="item_liberado_para_producao"/>
                    <g transform="translate(-0.5 -0.5)">
                        <switch>
                            <foreignObject style="overflow: visible; text-align: left;" pointer-events="none" width="100%" height="100%" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
                                <div
                                    xmlns="http://www.w3.org/1999/xhtml" style="display: flex; align-items: unsafe center; justify-content: unsafe center; width: 108px; height: 1px; padding-top: 492px; margin-left: 1175px;">
                                    <div style="box-sizing: border-box; font-size: 0; text-align: center; ">
                                        <div style="display: inline-block; font-size: 14px; font-family: Helvetica; color: #000000; line-height: 1.2; pointer-events: all; white-space: normal; word-wrap: normal; ">
                                            <div>Item Liberado</div>
                                            <div>para Produção
                                                <br />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </foreignObject>
                            <text x="1229" y="496" fill="#000000" font-family="Helvetica" font-size="14px" text-anchor="middle">Item Liberado...</text>
                        </switch>
                    </g>
                </g>
                <switch>
                    <g requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"/>
                    <a transform="translate(0,-5)" xlink:href="https://desk.draw.io/support/solutions/articles/16000042487" target="_blank">
                        <text text-anchor="middle" font-size="10px" x="50%" y="100%">Viewer does not support full SVG 1.1</text>
                    </a>
                </switch>
            </svg>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">

        var steps = [
                @foreach($item->steps as $step)
            {
                id: {{ $step->id }},
                information: {
                    id: {{ $step->stepInformation->id }},
                    name: "{{ $step->stepInformation->name }}",
                    ui_id: "{{ $step->stepInformation->ui_id }}",
                    type: "{{ $step->stepInformation->type }}"
                },
                isApproved: {{ $step->status === \App\Step::APPROVED ? "true" : "false" }},
                isDenied: {{ $step->status === \App\Step::DENIED ? "true" : "false" }},
                isLocked: {{ $step->isLocked() ? "true" : "false" }},
                route: "{{ route('steps.edit', [ 'step' => $step->id ]) }}"
            },
            @endforeach
        ]
        console.log(steps);

        $(document).ready(function () {
            steps.forEach(step => {
                let svgElement = $("#" + step.information.ui_id);

                if (step.isApproved || (step.information.ui_id === 'item_liberado_para_producao' && steps[19].isApproved)) {
                    svgElement.attr('fill', '#d5e8d4');
                    svgElement.attr('stroke', '#82b366')
                } else if (step.isDenied) {
                    if (step.information.name !== 'Atualizações e Correções') {
                        svgElement.attr('fill', '#f8cecc');
                        svgElement.attr('stroke', '#b85450')
                    }
                }

                let linkSelector = $("#" + step.information.ui_id + '_link');

                linkSelector.attr('href', step.route);
                linkSelector.click(function (event) {
                    let stepUiId = this.id.replace('_link', '')
                    let step = steps.filter(step => step.information.ui_id === stepUiId)[0];

                    if (step.isLocked) {
                        alert('Esta etapa não pode ser editada enquanto as etapas anteriores não forem finalizadas.');
                        event.preventDefault();
                    }
                })
            });
        });

    </script>
@endsection
