print("---- SALARY GRADER IN PYTHON TERMINAL ----\n")
print("Salary grades = [\nA = 15,000\nB = 12,000\nC = 10,000\nD = 9,000\n]\n")

while True:
    salary = str(input("Enter your salary grade: "))

    if (salary in ['A','B','C','D']):
        if (salary == 'A'):
            print("SALARY: 15,000\n")
        elif (salary == 'B'):
            print("SALARY: 12,000\n")
        elif (salary == 'C'):
            print("SALARY: 10,000\n")
        elif (salary == 'D'):
            print("SALARY: 9,000\n")
        else:
            print("SALARY: 9,000\n")
    else:
        print("Salary grade not included\nTerminating...")
        break