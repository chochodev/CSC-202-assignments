# AVERAGE NUMBER CALCULATOR

def get_validate_number(prompt):
    input_number = input(prompt)
    if (input_number.type() != 'int'):
        print("\n## Error: Enter a valid number\n")
        quit()

    return float(input_number)

num1 = get_validate_number("Enter first number: ")
num2 = get_validate_number("Enter second number: ")
num3 = get_validate_number("Enter third number: ")

print("Average is " + str(sum(num1,num2,num3)/3))