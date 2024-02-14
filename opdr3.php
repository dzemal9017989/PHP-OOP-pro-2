<?php

class Figure {
    protected $color;

    public function __construct($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    public function draw() {
        // Abstract method, will be implemented in child classes
    }
}

class Triangle extends Figure {
    protected $height;
    protected $width;

    public function __construct($color, $width, $height) {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }

    public function draw() {
        echo '<svg height="' . $this->height . '" width="' . $this->width . '">
                <polygon points="0,0 ' . $this->width . ',0 0,' . $this->height . '" style="fill:' . $this->getColor() . ';stroke:black;stroke-width:1" />
              </svg>';
    }
}

class Square extends Figure {
    protected $length;

    public function __construct($color, $length) {
        parent::__construct($color);
        $this->length = $length;
    }

    public function draw() {
        echo '<svg height="' . $this->length . '" width="' . $this->length . '">
                <rect width="' . $this->length . '" height="' . $this->length . '" style="fill:' . $this->getColor() . ';stroke-width:3;stroke:black" />
              </svg>';
    }
}

class Circle extends Figure {
    protected $radius;

    public function __construct($color, $radius) {
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function draw() {
        echo '<svg height="' . ($this->radius * 2) . '" width="' . ($this->radius * 2) . '">
                <circle cx="' . $this->radius . '" cy="' . $this->radius . '" r="' . $this->radius . '" fill="' . $this->getColor() . '" />
              </svg>';
    }
}

class Rectangle extends Figure {
    protected $height;
    protected $width;

    public function __construct($color, $width, $height) {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }

    public function draw() {
        echo '<svg height="' . $this->height . '" width="' . $this->width . '">
                <rect width="' . $this->width . '" height="' . $this->height . '" style="fill:' . $this->getColor() . ';stroke-width:3;stroke:black" />
              </svg>';
    }
}

$triangle = new Triangle("green", 100, 100);
$square = new Square("blue", 100);
$circle = new Circle("red", 50);
$rectangle = new Rectangle("yellow", 150, 80);

$triangle->draw();
$square->draw();
$circle->draw();
$rectangle->draw();
