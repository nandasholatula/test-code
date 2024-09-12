<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Login 1 - Bootstrap Brain Component -->
    <div class="bg-light py-3 py-md-5">
        <div class="container mt-5 mb-3">
            <div class="row">
                @foreach($getdata['channel']['item'] as $item)

                <div class="col-md-4">
                    <div class="card p-3 mb-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                                <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                                <div class="ms-2 c-details">
                                    <h6 class="mb-0">Mailchimp</h6> <span>1 days ago</span>
                                </div>
                            </div>
                            <div class="badge"> <span>Design</span> </div>
                        </div>
                        <div class="mt-5">
                            <h3 class="heading">{{$item['title']}}</h3>
                            <div class="mt-5">
                                <div class="categories">
                                    <div class="categories">
                                        @foreach($item['category'] as $key => $category)
                                        @if(in_array($key, [0, 1, 2]) && !empty($category))
                                        <span class="badge rounded-pill bg-primary">{{ $category['name'] ?? 'Unknown' }}</span>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                                <p>{{$item['pubDate']}}</p>
                                <a href="{{$item['link']}}"> Komentar</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>