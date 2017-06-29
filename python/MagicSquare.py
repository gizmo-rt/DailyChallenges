# https://codefights.com/challenge/DACX76NXCaJmAQta3


def magicSquare3by3(n):
    n.sort()
    return n[1] + n[5] + n[6] == sum(n) / 3



n = [-1, -1, -1, -1, 0, 1, 1, 1, 1]
print magicSquare3by3(n)
