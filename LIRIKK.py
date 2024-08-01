import sys
from time import sleep

def print_lirik():
    lines =[
        ("aku yang jatuh cintaaaa",0.05),
        ("haruskah kau kuberi kesempatan?",0.05),
        ("ingin aku jadi kekasih yang baik",0.07),
        ("berikan aku kesempatan ohh....",0.07),
        ("taukah dirimu?, taukah hatimu?",0.06),
        ("berulang kuketuk aku mencintamu",0.06),
        ("tapi dirimu tak pernah sadarii...",0.05),
        ("akuu... yang jatuh cintaa...",0.07)
    ]
    delays=[2.5,3,2.5,7.5,3.5,4,3.2,4,3.2,3.5]
    for i,(line, char_delay) in enumerate(lines):
    for char in line:
        print(char,end='')
        sys.stdout.flush()
        sleep(char_delay)
    sleep(delays[i])
    print('')
print_lirik()
print("https://open.spotify.com/intl-id/track/7zOVh5fGpEwSbZd0g9z80B?si=7ad474d53b39402f")