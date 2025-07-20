<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>دورة تعليمية</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Tahoma', sans-serif;
            background: #f8f9fa;
            direction: rtl;
        }

        .wrapper {
            display: flex;
            height: 100vh;
            overflow: hidden;
            position: relative;
        }

        .sidebar {
            width: 300px;
            background: #fff;
            border-left: 1px solid #ddd;
            overflow-y: auto;
            transition: transform 0.3s ease, width 0.3s ease;
            z-index: 1000;
        }

        .sidebar.collapsed {
            transform: translateX(100%);
            width: 0;
        }

        .sidebar-header {
            padding: 15px;
            background: #f1f1f1;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .toggle-btn {
            background: none;
            border: none;
            font-size: 18px;
            cursor: pointer;
        }

        .open-sidebar-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 2000;
            display: none;
            background: #0d6efd;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .open-sidebar-btn.visible {
            display: block;
        }

        .section {
            border-top: 1px solid #eee;
        }

        .section-header {
            padding: 10px;
            background: #f9f9f9;
            cursor: pointer;
            font-weight: bold;
            position: relative;
        }

        .section-header::after {
            content: "▼";
            position: absolute;
            left: 10px;
            transition: transform 0.3s;
        }

        .section-header.collapsed::after {
            transform: rotate(-90deg);
        }

        .section-content {
            padding-right: 15px;
        }

        .lesson {
            padding: 8px 10px;
            cursor: pointer;
            border-right: 3px solid transparent;
        }

        .lesson:hover,
        .lesson.active {
            background: #e9ecef;
            border-color: #0d6efd;
        }

        .content {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background: #f5f5f5;
            transition: margin 0.3s ease;
        }

        .video-wrapper,
        .article-wrapper {
            display: none;
        }

        .video-wrapper.active,
        .article-wrapper.active {
            display: block;
        }

        .video-wrapper {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            margin-bottom: 20px;
        }

        .video-wrapper iframe {
            position: absolute;
            width: 100%;
            height: 100%;
            right: 0;
            top: 0;
        }

        .article-wrapper {
            background: white;
            padding: 20px;
            border-radius: 8px;
        }

        .lecture-title {
            font-size: 22px;
            margin-bottom: 10px;
        }

        .lecture-description {
            font-size: 16px;
            color: #333;
        }

        @media (max-width: 768px) {
            .wrapper {
                flex-direction: column;
            }

            .sidebar {
                position: fixed;
                top: 0;
                right: 0;
                height: 100vh;
                background: white;
                width: 80%;
                box-shadow: -2px 0 8px rgba(0, 0, 0, 0.1);
            }

            .content {
                padding: 15px;
            }
        }
    </style>
</head>
{{-- @dd(json_decode($data[0]['lesson_structure'])) --}}
<?php $data = json_decode($data[0]['lesson_structure']);  ?>
{{-- @dd($data->lecture) --}}

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                وانەکان
                <button class="toggle-btn" onclick="toggleSidebar()">✕</button>
            </div>
            {{-- <div class="section">
                <div class="section-header">الدرس الثاني</div>
                <div class="section-content">
                    <div class="lesson" data-type="video" data-title="التطبيق العملي"
                        data-src="https://player.vimeo.com/video/357274789">
                        الفيديو 2: التطبيق
                    </div>
                    <div class="lesson" data-type="article" data-title="ملخص" data-content="هذا هو ملخص الدرس الثاني.">
                        المقال 2: ملخص
                    </div>
                </div>
            </div> --}}

            @foreach ($data->lecture as $lecture)

                        <?php

                $contents = $lecture->contents;
                $header1 = $contents[0];

                $subLectures = array_slice($contents, 1);


                                                                                                                                                                                                                                                                                                              ?>
                        @foreach ($subLectures as $content)
                            {{-- @dd($lecture->contents[0]->title) --}}

                            <div class="section">
                                <div class="section-header">{{ $header1->title }} </div>
                                <div class="section-content">
                                    <div class="lesson" data-type="video" data-title="التطبيق العملي"
                                        data-src="{{ $content->playback }}">
                                        {{ $content->title }}
                                    </div>


                                </div>
                            </div>

                        @endforeach
            @endforeach


            {{-- @foreach (json_decode($data[0]['lesson_structure']) as $lecture)

            @foreach ($lecture['contents'] as $content)
            <div class="section">
                <div class="section-header">الدرس الأول</div>
                <div class="section-content">
                    <div class="lesson active" data-type="video" data-title="مقدمة الفيديو"
                        data-src="https://player.vimeo.com/video/76979871">
                        الفيديو 1: مقدمة
                    </div>
                    <div class="lesson" data-type="article" data-title="مقال تعليمي"
                        data-content="هذا هو المقال النصي للدرس الأول.">
                        المقال 1: الشرح النصي
                    </div>
                </div>
            </div>
            @endforeach

            @endforeach --}}



            {{-- <div class="section">
                <div class="section-header">الدرس الثاني</div>
                <div class="section-content">
                    <div class="lesson" data-type="video" data-title="التطبيق العملي"
                        data-src="https://player.vimeo.com/video/357274789">
                        الفيديو 2: التطبيق
                    </div>
                    <div class="lesson" data-type="article" data-title="ملخص" data-content="هذا هو ملخص الدرس الثاني.">
                        المقال 2: ملخص
                    </div>
                </div>
            </div> --}}

        </div>

        <!-- Open Sidebar Button -->
        <button class="open-sidebar-btn" id="openBtn" onclick="toggleSidebar()">☰ فتح القائمة</button>

        <!-- Content Area -->
        <div class="content" id="contentArea">

            <div class="video-wrapper active" id="video-wrapper">

                <script src="https://cdn.jsdelivr.net/npm/@mux/mux-player"></script>
                <mux-player id="mux_player" metadata-viewer-user-id="Placeholder (optional)"></mux-player>
            </div>
            <div class="article-wrapper" id="article-wrapper">
                <h2 class="lecture-title" id="article-title"></h2>
                <p class="lecture-description" id="article-content"></p>
            </div>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const openBtn = document.getElementById('openBtn');

        function toggleSidebar() {
            sidebar.classList.toggle('collapsed');
            openBtn.classList.toggle('visible');
        }

        document.querySelectorAll('.section-header').forEach(header => {
            header.addEventListener('click', () => {
                header.classList.toggle('collapsed');
                const content = header.nextElementSibling;
                content.style.display = content.style.display === 'none' ? 'block' : 'none';
            });
        });

        document.querySelectorAll('.lesson').forEach(lesson => {
            lesson.addEventListener('click', () => {
                document.querySelectorAll('.lesson').forEach(l => l.classList.remove('active'));
                lesson.classList.add('active');

                const type = lesson.getAttribute('data-type');
                const title = lesson.getAttribute('data-title');

                if (type === 'video') {
                    const src = lesson.getAttribute('data-src');
                    document.getElementById('video-wrapper').classList.add('active');
                    document.getElementById('article-wrapper').classList.remove('active');
                    document.querySelector('#video-wrapper #mux_player').setAttribute('playback-id', src);
                } else {
                    const content = lesson.getAttribute('data-content');
                    document.getElementById('video-wrapper').classList.remove('active');
                    document.getElementById('article-wrapper').classList.add('active');
                    document.getElementById('article-title').textContent = title;
                    document.getElementById('article-content').textContent = content;
                }
            });
        });
    </script>

</body>

</html>