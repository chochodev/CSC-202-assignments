print("---- NESTED SCORE GRADER IN PYTHON TERMINAL ----\n")

while True:
    score = float(input("Enter your score between 0 to 100: "))
    
    if (score > 100 or score < 0):
        print("Score is out of range \nTerminating...")
        break
    else:
        if score >= 90:
            print("GRADE: A\n")
        elif score >= 80:
            print("GRADE: B\n")
        elif score >= 70:
            print("GRADE: C\n")
        elif score >= 60:
            print("GRADE: D\n")
        else:
            print("GRADE: F\n")
