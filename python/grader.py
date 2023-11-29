print("---- SCORE GRADER IN PYTHON TERMINAL ----\n")

while True:
    score = float(input("Enter your score between 0 to 100: "))
    
    if (score > 100 or score < 0):
        print("Score is out of range \nTerminating...")
        break
    else:
        if score >= 70:
            print("GRADE: A\n")
        elif score >= 60:
            print("GRADE: B\n")
        elif score >= 50:
            print("GRADE: C\n")
        elif score >= 45:
            print("GRADE: D\n")
        else:
            print("GRADE: F\n")
