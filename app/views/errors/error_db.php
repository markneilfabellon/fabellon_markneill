<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Database Error Occured</title>
    <style type="text/css">

    *{
        transition: all 0.6s;
    }

    html {
        height: 100%;
    }

    body{
        font-family: 'Lato', sans-serif;
        color: #888;
        margin: 0;
    }

    #main{
        display: table;
        width: 100%;
        height: 100vh;
        text-align: center;
    }

    .fof{
          display: table-cell;
          vertical-align: middle;
    }

    .fof h1{
          font-size: 50px;
          display: inline-block;
          padding-right: 12px;
          animation: type .5s alternate infinite;
    }

    @keyframes type{
          from{box-shadow: inset -3px 0px 0px #888;}
          to{box-shadow: inset -3px 0px 0px transparent;}
    }
    </style>

<!-- TF2_SC_INJECT_START -->
<style>
:root{
  --tf2-red:#b8383b;
  --tf2-blu:#3b5b92;
  --tf2-orange:#c58b4b;
  --tf2-dark:#0f0d0c;
  --tf2-panel:#302925;
  --tf2-text:#f1e7d0;
  --tf2-border:#4e443f;
  --tf2-highlight:#d9a441;
}

/* Base */
html,body{height:100%;margin:0;padding:0;background:var(--tf2-dark);color:var(--tf2-text);font-family: Georgia, 'Times New Roman', serif;}
/* TF2-like textured background achieved with CSS gradients (self-contained) */
body{
  background-color:var(--tf2-dark);
  background-image:
    radial-gradient(circle at 10% 20%, rgba(255,255,255,0.02) 0 2px, transparent 2px 60px),
    radial-gradient(circle at 80% 80%, rgba(255,255,255,0.01) 0 1px, transparent 1px 120px),
    linear-gradient(180deg, rgba(0,0,0,0.15), rgba(0,0,0,0.35));
  background-blend-mode: overlay;
  -webkit-font-smoothing:antialiased;
  -moz-osx-font-smoothing:grayscale;
}

/* Panel */
.tf2-panel, .container, .form-container, .card, .panel {
  background: linear-gradient(180deg, rgba(48,41,37,0.96), rgba(34,28,25,0.96));
  border:6px solid var(--tf2-border);
  border-radius:12px;
  box-shadow: 10px 10px 0 rgba(0,0,0,1);
  padding:1.5rem;
  color:var(--tf2-text);
}

/* Title */
h1,h2,h3{font-family: "Impact", "Arial Black", sans-serif;margin:0 0 .75rem 0;color:var(--tf2-highlight);text-shadow:3px 3px 0 #000;}
.tf2-title{ background: linear-gradient(90deg,var(--tf2-highlight), #e6b85d); -webkit-background-clip:text; -webkit-text-fill-color:transparent;}

/* Buttons */
.tf2-btn{ display:inline-block; font-weight:700; text-transform:uppercase; border:3px solid #000; padding:.6rem 1rem; border-radius:8px; box-shadow:6px 6px 0 #000; cursor:pointer; font-family:"Impact","Arial Black",sans-serif; }
.tf2-btn-yellow{ background:var(--tf2-highlight); color:#111; }
.tf2-btn-red{ background:var(--tf2-red); color:#fff; }
.tf2-btn-blue{ background:var(--tf2-blu); color:#fff; }
.tf2-btn:hover{ transform:translateY(-3px); filter:brightness(1.06); box-shadow:9px 9px 0 rgba(0,0,0,0.9); }

/* Inputs */
input[type="text"], input[type="email"], textarea, select {
  background:#241a18; color:var(--tf2-text); border:3px solid var(--tf2-border); padding:.85rem .9rem; border-radius:6px; font-size:1rem; width:100%;
}
input:focus, textarea:focus, select:focus{ outline:none; box-shadow:0 0 10px var(--tf2-orange); border-color:var(--tf2-orange); transform:scale(1.01); }

/* Table */
.tf2-table{ width:100%; border-collapse:collapse; margin-top:.5rem; }
.tf2-table thead th{ background:linear-gradient(90deg,#8b2d22,#3a3432); color:#fff; text-transform:uppercase; padding:.9rem; letter-spacing:1.2px; border-bottom:4px solid var(--tf2-highlight); }
.tf2-table tbody td{ padding:.8rem; border-bottom:1px solid rgba(255,255,255,0.04); color:var(--tf2-text); }

/* Pagination */
.pagination a{ display:inline-block; margin:.25rem; padding:.45rem .75rem; background:var(--tf2-highlight); color:#111; border:3px solid #000; border-radius:6px; box-shadow:4px 4px 0 #000; text-decoration:none; font-weight:700; }
.pagination strong{ background:var(--tf2-red); color:#fff; border:3px solid #000; padding:.45rem .75rem; box-shadow:4px 4px 0 #000; border-radius:6px; display:inline-block; }

/* Small devices */
@media (max-width:600px){
  .tf2-panel{ padding:1rem; border-width:4px; border-radius:8px; }
  h1{ font-size:1.6rem; }
  .tf2-btn{ padding:.5rem .75rem; }
}
</style>
<!-- TF2_SC_INJECT_END -->

</head>
<body>
    <div id="main">
        <div class="fof">
            <h1><?php echo $heading; ?></h1>
            <p><?php echo $message; ?></p>
        </div>
    </div>
</body>
</html>