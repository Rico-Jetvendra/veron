@include('inc.header', ['title' => 'Milestone'])
  <style>
    .timeline {
      position: relative;
      padding: 20px 0;
      margin-top: 20px;
    }

    .timeline:before {
      content: '';
      position: absolute;
      left: 50%;
      top: 0;
      bottom: 0;
      width: 2px;
      background: #ccc;
      transform: translateX(-50%);
    }

    .timeline-block {
      position: relative;
      margin: 30px 0;
    }

    .timeline-block.left .timeline-content {
      margin-right: 60%;
      text-align: right;
    }

    .timeline-block.right .timeline-content {
      margin-left: 60%;
      text-align: left;
    }

    .timeline-content {
      background: #fff;
      padding: 20px;
      border-radius: 4px;
      position: relative;
      box-shadow: 0 1px 4px rgba(0,0,0,0.1);
    }

    .timeline-block .timeline-dot {
      width: 20px;
      height: 20px;
      background: #337ab7;
      border-radius: 50%;
      position: absolute;
      top: 20px;
      left: 50%;
      transform: translateX(-50%);
      z-index: 100;
    }

    .timeline-title {
      margin-top: 0;
      font-size: 16px;
      font-weight: bold;
    }

    @media (max-width: 767px) {
      .timeline:before {
        left: 20px;
      }

      .timeline-block.left .timeline-content,
      .timeline-block.right .timeline-content {
        margin: 0 0 0 50px;
        text-align: left;
      }

      .timeline-block .timeline-dot {
        left: 20px;
        transform: none;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <h2 class="text-center">PT. Veron Indonesia</h2>

  <div class="timeline">
    <div class="timeline-block left">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <small>2011</small>
        <p>{{ __('milestone.milestone1') }}</p>
      </div>
    </div>
    <div class="timeline-block right">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <small>2015</small>
        <p>{{ __('milestone.milestone2') }}</p>
      </div>
    </div>
    <div class="timeline-block left">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <small>2017</small>
        <p>{{ __('milestone.milestone3') }}</p>
      </div>
    </div>
    <div class="timeline-block right">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <small>2019</small>
        <p>{{ __('milestone.milestone4') }}</p>
        <p>{{ __('milestone.milestone5') }}</p>
        <p>{{ __('milestone.milestone6') }}</p>
      </div>
    </div>
    <div class="timeline-block left">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <small>2022</small>
        <p>{{ __('milestone.milestone7') }}</p>
      </div>
    </div>
  </div>
</div>
@include('inc.footer')
