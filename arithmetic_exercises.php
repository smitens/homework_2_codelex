<?php
echo "Exercise 6 - Coza-Loza-Woza\n";
echo "\n";
for ($i = 1; $i <= 110; $i++) {
    echo $i . " ";
    if ($i % 11 == 0) {
        echo "\n";
    } else if ($i % 3 == 0) {
        echo "Coza ";
    } else if ($i % 5 == 0) {
        echo "Loza ";
    } else if ($i % 7 == 0) {
        echo "Woza ";
    }
}
echo "\n";
echo "Exercise 7\n";
echo "\n";
$acceleration = -9.81;
$time = 10;
$initialVelocity = 0;
$initialPosition = 0;

$positionAfterFall = 0.5 * $acceleration * pow($time, 2) + $initialVelocity * $time + $initialPosition;
echo $positionAfterFall. "\n";

echo "Exercise 8\n";
echo "\n";
$employees = [
    [
        "name" => "Employee 1",
        "basePay" => 7.50,
        "hoursWorked" => 35
    ],
    [
        "name" => "Employee 2",
        "basePay" => 8.20,
        "hoursWorked" => 47
    ],
    [
        "name" => "Employee 3",
        "basePay" => 10.00,
        "hoursWorked" => 73
    ]
];
function calculatePay($name, $basePay, $hoursWorked): string
{
    $overtimeThreshold = 40;
    $maximumHours = 60;
    $overtimeRate = 1.5;
    $minimumWage = 8.00;

    if ($basePay < $minimumWage) {
        return "$name: ERROR: Base pay cannot be less than minimum wage.";
    };
    if ($hoursWorked > $maximumHours) {
        return "$name: ERROR: Employee is not allowed to work more than 60 hours.";
    }
    if ($hoursWorked <= $overtimeThreshold) {
        $totalPay = $basePay * $hoursWorked;
    } else {
        $totalPay = ($basePay * $overtimeThreshold) + ($basePay * $overtimeRate * ($hoursWorked - $overtimeThreshold));
    }
    return "$name: Total pay for the employee: $" . number_format($totalPay, 2);
}
foreach ($employees as $employee) {
    $result = calculatePay($employee['name'], $employee['basePay'], $employee['hoursWorked']);
    echo $result . "\n";
}

echo "Exercise 9\n";
echo "\n";
$weight = readline("Enter your weight in kg: ");
$height = readline ("Enter your height in cm: ");

function calculateBMI($weight, $height): float
{
    $bmi = ($weight * 2.2046226218) * 703 / (pow($height / 2.54, 2));
    return $bmi;
}
$bmi = calculateBMI($weight, $height);
$bmi = number_format($bmi, 2);

if ($bmi < 18.5) {
    echo "Your body mass index is $bmi. You are underweight!\n";
} else if ($bmi >= 18.5 && $bmi <= 25) {
    echo "Your body mass index is $bmi. Your weight is optimal!\n";
} else {
    echo "Your body mass index is $bmi. You are overweight!\n";
}
echo "Exercise 10\n";
echo "\n";
class Geometry{
    public static function circleArea($radius) {
        if ($radius < 0) {
            echo "Error: Negative value entered for circle's radius.\n";
            return;
        }
        return "Circle area is: " . number_format(M_PI * $radius * 2, 2) ."\n";
    }
    public static function rectangleArea($length, $width)
    {
        if ($length < 0 || $width < 0) {
            echo "Error: Negative value entered for rectangle length or/and width.\n";
            return;
        }
        return "Rectangle area is:" . $length * $width. "\n";
    }
    public static function triangleArea($base, $height)
    {
        if ($base < 0 || $height < 0) {
            echo "Error: Negative value entered for triangle base or/and height.\n";
            return;
        }
        return "Triangle area is:" . $base * $height * 0.5 . "\n";
    }
};

echo "Geometry calculator:\n
Calculate the Area of a Circle
Calculate the Area of a Rectangle
Calculate the Area of a Triangle
Quit\n";
echo "\n";
$choice = (int) readline ("Enter your choice (1-4): ");
$validChoices = [1, 2, 3, 4];
while (!in_array($choice, $validChoices)) {
    echo "Invalid choice. Please enter a number between 1 and 4: ";
    $choice = (int) readline ("Enter your choice (1-4): ");
}
switch ($choice) {
    case 1:
        echo Geometry::circleArea(readline("Enter radius of the circle: "));
        break;
    case 2:
        echo Geometry::rectangleArea((readline("Enter length of the rectangle: ")),readline("Enter width of the rectangle: "));
        break;
    case 3:
        echo Geometry::triangleArea((readline("Enter base of the triangle: ")),readline("Enter height of the triangle: "));
        break;
    case 4:
        echo "You have quit!\n";
        exit;
}