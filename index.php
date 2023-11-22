<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
    <style>
        .container {
            background-color:white;
            margin-top: 100px;
            width: 800px !important;
            border: 1px dashed orange;
        }

        .row {
            margin: 10px;
        }

        .col-1 {
            margin-left: 0px;
        }

        .col-2 {
            margin-left: 15px;
            width: 400px;
        }

        .skill {
            width: 280px;
        }
    </style>
</head>

<body>
    <div class="container p-3 ">
        <form action="./result.php" method="get">
            <div class="row">
                <div class="col d-flex justify-content-center gap-5">
                    <label class="col-md-4 d-flex justify-content-end" for="name">Name</label>
                    <input class="col-md-4 form-control w-50" type="text" class="form-control w-50" name="name" id="name">
                </div>
            </div>

            <div class="row">
                <div class="col d-flex justify-content-center gap-5">
                    <label class="col-md-4 d-flex justify-content-end" for="club">Club you want to apply</label>
                    <select class="form-select w-50" aria-label="Default select example" name="club">
                        <option selected value="Robotic Club">Robotic Club</option>
                        <option value="EC Club">EC Club</option>
                        <option value="Runing club">Runing club</option>
                        <option value="Swimming club">Swimming club</option>
                    </select>
                </div>
            </div>

            <div class="row d-flex ">

                <label class="col-md-5 d-flex justify-content-end" for="time">Best time for you</label>
                <div class="col d-flex flex-wrap col-2">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="time" id="input_saturday_m" value="Saturday mornings">
                        <label class="form-check-label" for="input_saturday_m">Saturday mornings</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="time" id="input_saturday_a" value="Saturday afternoons">
                        <label class="form-check-label" for="input_saturday_a">Saturday afternoons</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="time" id="input_sunday" value="Sunday afternoons">
                        <label class="form-check-label" for="input_sunday">Sunday afternoons</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col d-flex gap-5">
                    <label class="col-md-4 d-flex justify-content-end skill" for="skills">Your Skills</label>
                    <div class="col d-flex col-md-4 w-50 col-1">
                        <div class="col afternoons">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="skill_1" name="skills[]" value="the best coder">
                                <label class="form-check-label" for="skill_1">The best coder</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="skill_2" name="skills[]" value="a super star">
                                <label class="form-check-label" for="skill_2">A super star</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="skill_3" name="skills[]" value="single">
                                <label class="form-check-label" for="skill_3">Single</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="skill_4" name="skills[]" value="the best eater">
                                <label class="form-check-label" for="skill_4">The best eater</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="skill_5" name="skills[]" value="good in arts">
                                <label class="form-check-label" for="skill_5">Good in arts</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="skill_6" name="skills[]" value="a crazy dancer">
                                <label class="form-check-label" for="skill_6">A crazy dancer</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="skill_7" name="skills[]" value="good in design">
                                <label class="form-check-label" for="skill_7">Good in design</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="skill_8" name="skills[]" value="good in speeches">
                                <label class="form-check-label" for="skill_8">Good in speeches</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-warning w-100">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>