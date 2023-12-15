# AREA & CIRCUMFERENCE CALCULATOR

print("\n## AREA & CIRCUMFERENCE CALCULATOR")
def get_validate_number(prompt):
    input_number = input(prompt)
    if not (input_number.isnumeric()):
        print("\n## Error: Enter a valid number\n")
        quit()

    return float(input_number)

pi = 3.142
radius = get_validate_number("Enter the circle radius(meters): ")
circumference = 2 * pi * radius
area = pi * (radius**2)

print("Results:\nCircumference: %.3fm\nArea: %.3fm" % (circumference, area))