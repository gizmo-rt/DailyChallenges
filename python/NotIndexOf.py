def notIndexOf(givenString, value):
    for i in range(len(givenString)-len(value)):
        t = [1 for j in zip(givenString[i:len(value) + i], value) if j[0] == j[1]]
        if sum(t) == 0:
            return i

    return - 1

givenString= "abc"
value= "abc"

print notIndexOf(givenString, value)