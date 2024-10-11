<?php
function renderTitle($title)
{
  return
    "
          <div class='logo-bullet'>
            <img src='images/HMI_logo_only.png' width='100%' height='100%' alt=''>
          </div>
          <p class='title-text text-center'>$title</p>
        ";
}

function renderBanner($bgImage, $title)
{
  return "
        <div class='banner d-flex justify-content-center' style='background-image: url($bgImage);'>
        <div class='banner-vector1'>
            <img src='images/vectorElements/academicVector1.png' alt=''>
        </div>
        <div class='banner-text text-center text-primary'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-12  d-flex align-items-center'>
                       " . renderTitle($title) . "
                    </div>
                </div>
            </div>
        </div>
        <div class='banner-vector2'>
            <img src='images/vectorElements/academicVector2.png' alt=''>
        </div>
    </div>
      ";
}

function renderContent($content1, $content2)
{
  return "
    <div class='content container position-relative py-5 padding-format'>
        <div class='row py-3 padding-format'>
            <div class='col-md-6'>
                <p>$content1</p>
            </div>
            <div class='col-md-6'>
                <p>$content2</p>
            </div>
        </div>
        " . renderSecionBreak() . "
    </div>
  ";
}

function renderSecionBreak()
{
  return "
        <div class='row d-flex justify-content-center pb-3 padding-format'>
            <div class='vector-div sm-vector'>
                <img src='images/vectorElements/graduateIcon.png' alt=''>
            </div>
            <div class='vector-div sm-vector'>
                <img src='images/vectorElements/graduateIcon.png' alt=''>
            </div>
            <div class='vector-div md-vector'>
                <img src='images/vectorElements/graduateIcon.png' alt=''>
            </div>
            <div class='vector-div lg-vector'>
                <img src='images/vectorElements/graduateIcon.png' alt=''>
            </div>
            <div class='vector-div md-vector'>
                <img src='images/vectorElements/graduateIcon.png' alt=''>
            </div>
            <div class='vector-div sm-vector'>
                <img src='images/vectorElements/graduateIcon.png' alt=''>
            </div>
            <div class='vector-div sm-vector'>
                <img src='images/vectorElements/graduateIcon.png' alt=''>
            </div>
        </div>
      ";
}
